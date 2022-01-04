<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (isset($_GET['page']) && in_array($_GET['page'],$pages)) ? ucfirst($_GET['page']) : 'MYM'  ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.png" type="image/png">
    <link rel="stylesheet" href="./views/css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a title="MYM" href="<?php echo BASE_URL ?>" class="navbar-brand"><i class="fas fa-film"></i><span class="mym">MYM</span></a>
                </div>
                <a  title="About us" href="<?php echo BASE_URL ?>about" class="nav-link">About Us</a>
                
            </div>
        </nav>
    </header>
