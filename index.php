<?php
require_once(CONTROLLER . 'UserController.php');
extract($_POST);
extract($_GET);


switch ($action) {
    case 'UserController@login':
        $Usercontroller = new UserController();
        $Usercontroller->login($pseudo, $password);
        break;
    case 'UserController@signup':
        $Usercontroller = new UserController();
        $Usercontroller->login($pseudo, $password);
        break;
    case 'UserController@logout':
        $Usercontroller = new UserController();
        $Usercontroller->login($pseudo, $password);
        break;
}
?>
