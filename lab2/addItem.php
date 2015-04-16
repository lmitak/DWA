<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 2.4.2015.
 * Time: 11:54
 */

include_once("resources/db_connect.php");

$sql = "INSERT INTO sheet1(NazivProizvoda, TipProizvoda, OpisProizvoda, Vegetarijanski, Halal, Košer, Alergeni, Cijena)
        VALUES(".$_POST['naziv'].", ".$_POST['tip'].", ".$_POST['opis'].", ".$_POST['vege'].",
        ".$_POST['halal'].", ".$_POST['koser'].", ".$_POST['alergeni'].", ".$_POST['cijena'].");";

$res = mysqli_query($connection, $sql) or die(mysqli_errno($connection));