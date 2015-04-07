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
echo "{$row['naziv']}|{$row['kratkiOpis']}|{$row['opis']}|{$row['sastojci']}|{$row['cal']}|{$row['cijena']}|{$row['image']}";
//echo var_dump($_POST);
//echo $_POST['jelo'];
mysqli_close($connection);
exit();
