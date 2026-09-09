<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product Management</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #172033;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            background: #101827;
            color: white;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
        }

        .logo {
            font-size: 27px;
            font-weight: bold;
            margin-bottom: 45px;
            padding-left: 15px;
        }

        .menu-title {
            color: #8290a8;
            font-size: 13px;
            margin: 0 15px 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .menu-item {
            display: block;
            text-decoration: none;
            color: white;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 8px;
        }

        .menu-item.active {
            background: #294fc1;
        }

        .menu-item:hover {
            background: #1e3fa5;
        }

        .logout {
            margin-top: auto;
            background: #202b3e;
            text-align: center;
        }

        /* MAIN */
        .main {
            flex: 1;
        }

        .topbar {
            height: 76px;
            background: white;
            border-bottom: 1px solid #e5e9f0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 38px;
        }

        .topbar-title {
            font-size: 22px;
            font-weight: bold;
        }

        .user {
            color: #667085;
        }

        .content {
            padding: 40px;
        }

        .page-title {
            font-size: 32px;
            margin: 0 0 8px;
        }

        .subtitle {
            color: #68758a;
            margin-bottom: 30px;
        }

        /* CARD */
        .card {
            background: white;
            border-radius: 16px;
            border: 1px solid #e1e6ef;
            overflow: hidden;
            margin-bottom: 25px;
        }

        .card-header {
            padding: 22px 26px;
            border-bottom: 1px solid #e5e9f0;
        }

        .card-header h2 {
            margin: 0;
            font-size: 20px;
        }

        .card-body {
            padding: 25px;
        }

        /* FORM */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            margin-bottom: 7px;
            font-weight: bold;
            font-size: 14px;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d7dde8;
            border-radius: 8px;
            font-size: 14px;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #294fc1;
        }

        .btn {
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 18px;
        }

        .btn-primary {
            background: #294fc1;
            color: white;
        }

        .btn-primary:hover {
            background: #1e3fa5;
        }

        .btn-cancel {
            background: #e9edf4;
            color: #344054;
            text-decoration: none;
            display: inline-block;
            margin-left: 8px;
        }

        /* TABLE */
        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f8fafc;
            color: #667085;
            font-size: 13px;
            text-align: left;
            padding: 15px 18px;
            border-bottom: 1px solid #e5e9f0;
        }

        td {
            padding: 16px 18px;
            border-bottom: 1px solid #edf0f5;
            font-size: 14px;
        }

        tr:hover {
            background: #fafcff;
        }

        .price {
            font-weight: bold;
        }

        .quantity {
            color: #475467;
        }

        .actions a {
            text-decoration: none;
            margin-right: 10px;
            font-weight: bold;
        }

        .edit {
            color: #294fc1;
        }

        .delete {
            color: #d92d20;
        }

        .empty {
            text-align: center;
            padding: 50px;
            color: #667085;
        }

        .empty h3 {
            margin-bottom: 8px;
            color: #475467;
        }

        @media (max-width: 800px) {
            .sidebar {
                width: 210px;
            }

            .content {
                padding: 25px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                display: none;
            }

            .topbar {
                padding: 0 20px;
            }

            .content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            LavaLust
        </div>

        <div class="menu-title">
            Main Menu
        </div>

        <a href="<?= site_url('products'); ?>" class="menu-item active">
            📦 Products
        </a>

        <a href="<?= site_url('auth/logout'); ?>" class="menu-item logout">
            ↪ Logout
        </a>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="main">

        <!-- TOPBAR -->
        <header class="topbar">

            <div class="topbar-title">
                Product Management
            </div>

            <div class="user">
                <?= htmlspecialchars(
                    $this->session->userdata('username') ?? 'User',
                    ENT_QUOTES,
                    'UTF-8'
                ); ?>
            </div>

        </header>


        <!-- CONTENT -->
        <section class="content">

            <h1 class="page-title">
                Products
            </h1>

            <p class="subtitle">
                Manage your product inventory.
            </p>


            <!-- ADMIN FORM -->
            <?php if (!empty($is_admin)): ?>

                <?php
                    $product = isset($product) && is_array($product)
                        ? $product
                        : [];

                    $is_edit = !empty($product);
                ?>

                <div class="card">

                    <div class="card-header">
                        <h2>
                            <?= $is_edit ? 'Edit Product' : 'Add New Product'; ?>
                        </h2>
                    </div>

                    <div class="card-body">

                        <form
                            action="<?= site_url(
                                $is_edit
                                    ? 'products/update/' . $product['id']
                                    : 'products/create'
                            ); ?>"
                            method="post"
                        >

                            <div class="form-grid">

                                <div class="form-group">

                                    <label>
                                        Product Name
                                    </label>

                                    <input
                                        type="text"
                                        name="product_name"
                                        placeholder="Enter product name"
                                        value="<?= $is_edit
                                            ? htmlspecialchars(
                                                $product['product_name'],
                                                ENT_QUOTES,
                                                'UTF-8'
                                            )
                                            : ''; ?>"
                                        required
                                    >

                                </div>


                                <div class="form-group">

                                    <label>
                                        Price
                                    </label>

                                    <input
                                        type="number"
                                        name="price"
                                        step="0.01"
                                        placeholder="0.00"
                                        value="<?= $is_edit
                                            ? htmlspecialchars(
                                                $product['price'],
                                                ENT_QUOTES,
                                                'UTF-8'
                                            )
                                            : ''; ?>"
                                        required
                                    >

                                </div>


                                <div class="form-group full">

                                    <label>
                                        Description
                                    </label>

                                    <textarea
                                        name="description"
                                        placeholder="Enter product description"
                                        required
                                    ><?= $is_edit
                                        ? htmlspecialchars(
                                            $product['description'],
                                            ENT_QUOTES,
                                            'UTF-8'
                                        )
                                        : ''; ?></textarea>

                                </div>


                                <div class="form-group">

                                    <label>
                                        Quantity
                                    </label>

                                    <input
                                        type="number"
                                        name="quantity"
                                        placeholder="0"
                                        value="<?= $is_edit
                                            ? htmlspecialchars(
                                                $product['quantity'],
                                                ENT_QUOTES,
                                                'UTF-8'
                                            )
                                            : ''; ?>"
                                        required
                                    >

                                </div>

                            </div>


                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                <?= $is_edit
                                    ? 'Update Product'
                                    : 'Add Product'; ?>
                            </button>


                            <?php if ($is_edit): ?>

                                <a
                                    href="<?= site_url('products'); ?>"
                                    class="btn btn-cancel"
                                >
                                    Cancel
                                </a>

                            <?php endif; ?>

                        </form>

                    </div>

                </div>

            <?php endif; ?>


            <!-- PRODUCT LIST -->
            <div class="card">

                <div class="card-header">
                    <h2>Product List</h2>
                </div>


                <div class="table-wrapper">

                    <?php if (!empty($products)): ?>

                        <table>

                            <thead>

                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Quantity</th>

                                    <?php if (!empty($is_admin)): ?>
                                        <th>Actions</th>
                                    <?php endif; ?>

                                </tr>

                            </thead>


                            <tbody>

                                <?php foreach ($products as $product): ?>

                                    <tr>

                                        <td>
                                            <?= htmlspecialchars(
                                                $product['id'],
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ); ?>
                                        </td>

                                        <td>
                                            <strong>
                                                <?= htmlspecialchars(
                                                    $product['product_name'],
                                                    ENT_QUOTES,
                                                    'UTF-8'
                                                ); ?>
                                            </strong>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars(
                                                $product['description'],
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ); ?>
                                        </td>

                                        <td class="price">
                                            ₱<?= number_format(
                                                (float)$product['price'],
                                                2
                                            ); ?>
                                        </td>

                                        <td class="quantity">
                                            <?= htmlspecialchars(
                                                $product['quantity'],
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ); ?>
                                        </td>


                                        <?php if (!empty($is_admin)): ?>

                                            <td class="actions">

                                                <a
                                                    href="<?= site_url(
                                                        'products/update/' .
                                                        $product['id']
                                                    ); ?>"
                                                    class="edit"
                                                >
                                                    Edit
                                                </a>

                                                <a
                                                    href="<?= site_url(
                                                        'products/delete/' .
                                                        $product['id']
                                                    ); ?>"
                                                    class="delete"
                                                    onclick="return confirm('Are you sure you want to delete this product?');"
                                                >
                                                    Delete
                                                </a>

                                            </td>

                                        <?php endif; ?>

                                    </tr>

                                <?php endforeach; ?>

                            </tbody>

                        </table>

                    <?php else: ?>

                        <div class="empty">

                            <h3>
                                No products yet
                            </h3>

                            <p>
                                Add your first product to get started.
                            </p>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>