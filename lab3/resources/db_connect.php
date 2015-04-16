<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 2.4.2015.
 * Time: 8:56
 */
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "ods_db";

$connection = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if (mysqli_connect_errno()) {
    die("Databaase connection failed" . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
}
mysqli_query($connection, "SET NAMES UTF8");