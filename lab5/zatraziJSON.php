<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 11.5.2015.
 * Time: 21:08
 */
session_start();
include_once("resources/header.php");
include_once("resources/navigation.php");
?>

<div class="column column-8">
    <form action="jsoni.php" method="GET">
        <input type="text" name="proizvod" placeholder="Proizvod">
        <input type="text" name="vrsta"placeholder="Vrsta proizvoda">
        <input type="submit" value="Pošalji">
    </form>
    <br />
    <p>Za pretragu svih proizvoda pošaljite prazan upitnik.</p>
</div>
<?php
include_once("resources/bootie.php");