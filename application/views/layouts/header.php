<!DOCTYPE HTML>
<html>

<head>
    <title><?= $title; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/')?>images/nav.png">
    <link href="<?= base_url('assets/')?>css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="<?= base_url('assets/')?>css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-left">
                        <div class="logo">
                            <a href="http://localhost/tarewis1/home/"><img
                                    src="<?= base_url('assets/')?>images/logo.png" width=170px height=80px></a>
                        </div>
                        <div class="menu">
                            <a class="toggleMenu" href="#"><img src="<?= base_url('assets/')?>images/nav.png"
                                    alt="" /></a>
                            <ul class="nav" id="nav">
                                <?php if ($title =='Tugas Akhir Rekomendasi'):?>
                                <li class="current">
                                    <?php else : ?>
                                <li>
                                    <?php endif ; ?>
                                    <a href="http://localhost/tarewis1/home/">Tempat Wisata</a>
                                </li>
                                <?php if ($nama =='0'):?>
                                <?php else : ?>
                                <?php if ($title =='Favorit Page'):?>
                                <li class="current">
                                    <?php else : ?>
                                <li>
                                    <?php endif ; ?>
                                    <a href="http://localhost/tarewis1/home/favorit">Wishlist</a>
                                </li>
                                <?php endif ; ?>
                                <?php if ($title =='Rekomendasi'):?>
                                <li class="current">
                                    <?php else : ?>
                                <li>
                                    <?php endif ; ?>
                                    <a href="http://localhost/tarewis1/home/rekomendasi">rekomendasi</a>
                                </li>

                                <div class="clear"></div>
                            </ul>
                            <script type="text/javascript" src="<?= base_url('assets/')?>js/responsive-nav.js"></script>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="header_right">
                        <ul class="nav" id="nav">
                            <div class="menu">
                                <?php if ($nama =='0'):?>
                                <?php if ($title =='Login'):?>
                                <li class="current">
                                    <?php else : ?>
                                <li>
                                    <?php endif ; ?>
                                    <a href="http://localhost/tarewis1/auth">Login</a>
                                </li>
                                <?php else : ?>
                                <a>Hallo <?= $login['nama'];?></a>
                                <li>
                                    <a href="http://localhost/tarewis1/auth/logout">Logout
                                    </a>
                                </li>
                                <?php endif ; ?>
                                <div class="clear"></div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>