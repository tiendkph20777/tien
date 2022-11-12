<?php
//models

// controllers
require_once "controllers/controller.php";
require_once "controllers/home_contro.php";
require_once "controllers/comment_contro.php";

include "views/header.php";

$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';

switch ($ctr) {
    case '/':
        # code...
        break;
    case 'home':
        show_home();
        break;
    case 'comment':
        show_comment();
        break;
    default:
        error_404_show();
        break;
}
include "views/footer.php";
