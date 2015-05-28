<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 23.4.2015.
 * Time: 9:38
 */

session_start();

if(isset($_SESSION['user'])){
    $forma = "<form action='skini.php' method='POST'>";
    $forma .= "<label>Filtriraj cjenik po upitu: </label>";
    $forma .= "<input type='text' name='filter' id='filter' />";
    $forma .= "<input type='submit' value='Pošalji upit'/>";
    $forma .= "</form>";



    include_once("resources/header.php");
    echo "<div class='row'>";
    include_once("resources/navigation.php");
    echo "<article class='column column-7'>";
    echo $forma;
    echo "</article>";

    echo "</div>";
    include_once("resources/bootie.php");
}else{
    header('Location: login.html');
}