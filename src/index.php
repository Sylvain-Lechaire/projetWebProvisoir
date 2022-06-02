<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Ethann.SCHNEIDER and Amos.LeCoq
 * @version   13-MAY-2022
 */

session_start();

require "controller/navigation.php";
require "controller/user.php";
require "controller/article.php";
require "controller/cart.php";


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'login':
            login($_POST['username'] ,$_POST['password']);
            break;
        case 'loginPage':
            loginPage();
            break;
        case 'register':
            register($_POST['username'], $_POST['realName'], $_POST['surname'],$_POST['password']);
            break;
        case 'registerPage':
            registerPage();
            break;
        case 'logout':
            logout();
            break;
        case 'cart':
            cart($_POST['type'], $_POST['id'], $_POST['quantity']);
            break;
        case 'showCart':
            showCart();
            break;
        case 'products':
            getCheckAllArticle();
            break;
        case 'singleProduct':
            getCheckArticle($_GET['id']);
            break;
        case 'about':
            about();
            break;
        default:
            lost();
    }
} else {
    home();
}