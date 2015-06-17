<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 7.5.2015.
 * Time: 9:31
 */
session_start();

include_once("resources/header.php");

include_once("resources/navigation.php");

?>

<div class="column column-8">
    <form action="podaci.php" method="GET">
        <input type="text" name="proizvodjac" placeholder="Proizvođač">
        <input type="text" name="proizvod"placeholder="Proizvod">
        <input type="submit" value="Pošalji">
    </form>
    <br />
    <p>Za pretragu svih proizvoda pošaljite prazan upitnik.</p>
</div>

<?php

include_once("resources/bootie.php");