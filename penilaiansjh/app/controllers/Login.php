<?php

class Login extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }
    
    public function index() {
        $data = [
            'judul' => 'Login', 
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];
        
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function masuk() {
        $data = [
            'judul' => 'Login', 
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];
        
         //Check for post
         if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'judul' => 'Login', 
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username             (JALAN)
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password             (JALAN)
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';          //kalo dinyalain Password or username is incorrect

                    $this->view('login/index', $data);
                }
            }

        } else {
            $data = [
                'judul' => 'Login', 
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }

        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        header('Location:' . BASEURL . '/home');
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('Location: ' . BASEURL . '/login');
    }
}