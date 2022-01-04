<?php
require_once './autoload.php';
$pages = ['home', 'add', 'update', 'delete', 'logout'];
require_once './views/includes/header.php';
$home = new HomeController();
if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {

    if (isset($_GET['page'])) {
        if (in_array($_GET['page'], $pages)) {
            $page = $_GET['page'];
            $home->index($page);
        } else {
            include('views/404.php');
        }
    } else {
        $home->index("home");
    }
} else if (isset($_GET['page']) && $_GET['page'] === 'register') {
    $home->index("register");
} else if (isset($_GET['page']) && $_GET['page'] === 'about') {
    $home->index("about");
} else if (isset($_GET['page']) && $_GET['page'] === 'login') {
    $home->index("login");
} else if (isset($_GET['page']) && in_array($_GET['page'], $pages) == false) {
    $home->index('404');
} else {
    $home->index("login");
}


require_once './views/includes/footer.php';
