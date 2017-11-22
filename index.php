<?php
require_once('Controller/UserController.php');
require_once('Model/User.php');

extract($_POST);
extract($_GET);


switch ($action) {
    case 'UserController@login':
        $Usercontroller = new UserController();
        $Usercontroller->login($pseudo, $password);
        break;
    case 'UserController@signup':
        $Usercontroller = new UserController();
        $Usercontroller->signup($pseudo, $password);
        break;
    case 'UserController@logout':
        $Usercontroller = new UserController();
        $Usercontroller->remove($pseudo, $password);
        break;
}
?>
