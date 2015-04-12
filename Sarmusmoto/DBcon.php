<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 6.4.2015.
 * Time: 10:50
 */

$host = "localhost";
$user = "root";
$pw = "";
$db = "sarmusmoto";

$connection = mysqli_connect($host, $user, $pw, $db);
/*
if($connection = mysqli_connect_errno()){
    echo "Sorry došlo je do greške".mysqli_connect_errno();
    die();
}*/

