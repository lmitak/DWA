<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 6.4.2015.
 * Time: 18:53
 */

require_once("DBcon.php");

$query = "SELECT * FROM jelo WHERE naziv ='". $_POST['jelo']."'";
$res = mysqli_query($connection, $query) or die("Ne štima");
$row = mysqli_fetch_assoc($res);
echo "Data: \nNaziv: {$row['naziv']}\nKratki Opis: {$row['kratkiOpis']}\nOpis: {$row['opis']}\nSastojci: {$row['sastojci']}";
//echo "Data {$row['naziv']}";
//echo var_dump($_POST);
//echo $_POST['jelo'];