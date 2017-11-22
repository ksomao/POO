<?php
require_once('Controller/UserController.php');
require_once('Model/UserModel.php');
$Usercontroller = new UserController();
$action = "";
extract($_POST);
extract($_GET);


switch ($action) {
    case 'UserController@login':
        $Usercontroller->login($pseudo, $password);
        break;
    case 'UserController@signup':
        $Usercontroller->signUp($pseudo, $password);
        break;
    case 'UserController@remove':
        $Usercontroller->remove($pseudo, $id);
        break;
    case 'UserController@getSignup':
        $Usercontroller->getSignupPage();
        break;
    case 'UserController@getLogin':
        $Usercontroller->getLoginPage();
        break;
    case 'UserController@getHome':
        $Usercontroller->getHomePage();
        break;
    default :
        $Usercontroller->getSignupPage();
        break;
}
?>
