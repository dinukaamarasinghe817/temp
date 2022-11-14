<?php

class Login extends Controller{
    public function student($username = '', $password = ''){
        $user = $this->model('User');
        $user->username = $name;
        $user->password = $password;
        
        $this->view('home/index', ['name'=> $user->name, 'password'=> $user->password]);
    }

    public function lecture($username = '', $password = ''){
        $user = $this->model('User');
        $user->username = $name;
        $user->password = $password;
        
        $this->view('home/index', ['name'=> $user->name, 'password'=> $user->password]);
        // have extra codes
    }
}