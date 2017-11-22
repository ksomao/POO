<?php

include 'router.php'

$page = isset($_GET['page']) ? htmlentities($_GET['page']) : 'default';
  switch ($page) {
    case 'connexion':
      include('./views/login.php');
      break;


      case 'inscription':
        include('./views/form.php');

        break;
    case 'default':
      include('./views/404.php');

      break;
  }


 ?>
