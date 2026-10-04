<?php
 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
 
class ApiController extends Controller
{
    public function __construct()
    {
        parent::__construct();
 
        $this->call->model('ProductModel', 'productmodel');
    }
 
    public function login()
    {
        $this->api->require_method('POST');
 
        $input = $this->api->body();
 
        if (
            empty($input['username']) ||
            empty($input['password'])
        ) {
            return $this->api->respond_error(
                'Username and password are required.',
                400
            );
        }
 
        $stmt = $this->db->raw(
            "SELECT * FROM users WHERE username = ? LIMIT 1",
            [$input['username']]
        );
 
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
 
        if (!$user) {
            return $this->api->respond_error(
                'Invalid username or password.',
                401
            );
        }
 
        if (!password_verify(
            $input['password'],
            $user['password']
        )) {
            return $this->api->respond_error(
                'Invalid username or password.',
                401
            );
        }
 
        $tokens = $this->api->issue_tokens([
            'id'       => $user['id'],
            'username' => $user['username'],
            'role'     => $user['role']
        ]);
 
        return $this->api->respond([
            'message' => 'Login successful.',
            'user' => [
                'id'       => $user['id'],
                'username' => $user['username'],
                'email'    => $user['email'],
                'role'     => $user['role']
            ],
            'tokens' => $tokens
        ]);
    }
 
    public function logout()
    {
        $this->api->require_jwt();
 
        $this->api->require_method('POST');
 
        return $this->api->respond([
            'message' => 'Logout successful.'
        ]);
    }
 
    public function products()
    {
        $this->api->require_jwt();
 
        $products = $this->productmodel
            ->getAllProducts();
 
        return $this->api->respond($products);
    }
 
    public function product($id)
    {
        $this->api->require_jwt();
 
        $product = $this->productmodel
            ->getProduct($id);
 
        if (!$product) {
            return $this->api->respond_error(
                'Product not found.',
                404
            );
        }
 
        return $this->api->respond($product);
    }
 
    public function createProduct()
    {
        $this->api->require_jwt();
 
        $this->api->require_method('POST');
 
        $input = $this->api->body();
 
        if (empty($input['product_name'])) {
            return $this->api->respond_error(
                'Product name is required.',
                400
            );
        }
 
        if (!isset($input['price'])) {
            return $this->api->respond_error(
                'Price is required.',
                400
            );
        }
 
        if (!isset($input['quantity'])) {
            return $this->api->respond_error(
                'Quantity is required.',
                400
            );
        }
 
        $data = [
            'product_name' => $input['product_name'],
            'description'  => $input['description'] ?? '',
            'price'        => $input['price'],
            'quantity'     => $input['quantity']
        ];
 
        $this->productmodel->createProduct($data);
 
        return $this->api->respond([
            'message' => 'Product created successfully.'
        ], 201);
    }
 
 
    public function updateProduct($id)
    {
        $this->api->require_jwt();
 
        $input = $this->api->body();
 
        $product = $this->productmodel
            ->getProduct($id);
 
        if (!$product) {
            return $this->api->respond_error(
                'Product not found.',
                404
            );
        }
 
        $data = [
            'product_name' => $input['product_name'] ?? $product['product_name'],
            'description'  => $input['description'] ?? $product['description'],
            'price'        => $input['price'] ?? $product['price'],
            'quantity'     => $input['quantity'] ?? $product['quantity']
        ];
 
        $this->productmodel
            ->updateProduct($id, $data);
 
        return $this->api->respond([
            'message' => 'Product updated successfully.'
        ]);
    }
 
    public function deleteProduct($id)
    {
        $this->api->require_jwt();
 
        $this->api->require_method('DELETE');
 
        $product = $this->productmodel
            ->getProduct($id);
 
        if (!$product) {
            return $this->api->respond_error(
                'Product not found.',
                404
            );
        }
 
        $this->productmodel
            ->deleteProduct($id);
 
        return $this->api->respond([
            'message' => 'Product deleted successfully.'
        ]);
    }
}