<?php
require_once('assets/php/functions.php');
sleep(2);
if (isset($_SESSION['Auth']) && $_SESSION['Auth'] == true) {
    // buat homepage 
    viewPage('header', 'Catatan');
    viewPage('home');
} elseif (isset($_GET['login'])) {
    // buat login page 
    viewPage('header', 'BuCat - Login');
    viewPage('login_page');
} elseif (isset($_GET['signup'])) {
    // buat sign up page
    viewPage('header', 'BuCat - Signup');
    viewPage('signup_page');
} else {
    // buat default page
    viewPage('header', 'BuCat - Login');
    viewPage('login_page');
}

// for clearing previous submitted form value
if (isset($_SESSION['form_data'])) {
    unset($_SESSION['form_data']);
}

// memasukkan footer
viewPage('footer');
