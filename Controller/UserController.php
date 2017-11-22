<?php

class UserController
{

    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function getSignupPage()
    {
        require "views/signup.php";
    }

    public function getHomePage()
    {
        require "views/home.php";
    }

    public function getLoginPage()
    {
        require "views/login.php";
    }

    public function login($pseudo, $password)
    {
        if ($this->userModel->check($pseudo, $password)) {
            header("location:index.php?action=UserController@getHome");
        } else {
            header("location:index.php?action=UserController@getSignup");
        }
    }

    public function signUp($pseudo, $password)
    {
        $this->userModel->add($pseudo, $password);

        header("location:index.php?action=UserController@getLogin");
    }

}