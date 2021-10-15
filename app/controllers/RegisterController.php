<?php

class RegisterController extends Controller {

    public function index() {
        $data['name'] = 'MVC Project';
        $data['state'] = 'Register';

        $this->render('register', $data);
    }

    public function login()
    {
        $sent = array(
            'loginUser' =>  $_POST['name']
        );

        $this->render('login', $sent);
    }

    public function createUser  ($params) {

       $user = new Users();
       $userId = $user->insert();

       if($userId) {
            $_SESSION['name'] = $user->name;
            $_SESSION['id'] = $userId;

            $this->redirect('users/updateAddress');
            
       } else {
           dnd('Failed to register');
       }
    }
}