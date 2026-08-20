<?php
defined ('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class StudentController extends Controller 
{
    public function index()
    {
        $this->call->view('student_home.php');
    }
    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00134',
            'name' => 'Stephanie A. Romasanta',
            'course' => 'Bachelor of Science in Information Technology',
            'year_level' => '3rd Year',
            'section' => 'F3',
            'email' => 'stephanie.romasanta@example.com'
        ];
        $this->call->view('student_profile', $student);
    }
}