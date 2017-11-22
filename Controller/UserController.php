<?php

class UserController{

    public $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login($pseudo,$password)
    {
        $this->userModel->check($pseudo, $password);
    }


}