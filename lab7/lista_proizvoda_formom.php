<?php
/**
 * Created by PhpStorm.
 * User: lmita_000
 * Date: 28.5.2015.
 * Time: 9:53
 */

include_once("resources/header.php");
?>

<form method="post" action="rezultati_forme.php">
    <label for="naziv">Naziv proizvoda:</label>
    <input type="text" id="naziv" name="naziv"/>
    <input type="submit" value="Upitaj!">
</form>

<?php
include_once("resources/bootie.php");