<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="<?php echo CSS;?>style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo CSS;?>bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../ecom/"> -->
    <!-- <link rel="stylesheet" href="./fontawesome-free-6.5.2-web/css/all.min.css"> -->
</head>

<body>
    <section id="header">
        <a href="#"><img src="<?php echo IMG;?>logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="<?php echo URL;?>index">Home</a></li>
                <li><a href="<?php echo URL;?>index/shop">Shop</a></li>
                <li><a href="<?php echo URL;?>index/blog">Blog</a></li>
                <li><a href="<?php echo URL;?>index/about">About</a></li>
                <li><a href="<?php echo URL;?>index/contact">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></i></a>
            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </section>
