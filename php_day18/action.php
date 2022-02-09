<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Series;
use App\classes\Register;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'series')
    {
        include 'pages/series.php';
    }
    elseif ($_GET['pages'] == 'register')
    {
        include 'pages/register.php';
    }
}
elseif (isset($_POST['btn']))
{
    $home = new Home($_POST);
    $result = $home -> primeNumber();
    include 'pages/home.php';
}
elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->getSeries();
    include 'pages/series.php';
}
elseif (isset($_POST['register_btn']))
{
    $register = new Register($_POST);
//    $result =$register->;
//    include 'pages/register.php';
}
else {
    $home = new Home();
    $home->index();
}
