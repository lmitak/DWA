<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 6.4.2015.
 * Time: 18:53
 */

require_once("DBcon.php");

$jezik = 1;

if($_POST['lang'] == "ENG"){
    $jezik = 2;
}


$query = "SELECT * FROM jelo WHERE id ='". $_POST['jelo']."' AND idJezika = '".$jezik."'";

if($res = mysqli_query($connection, $query)){
    $row = mysqli_fetch_assoc($res);
    $kratkiOpis = iconv("Windows-1250", "UTF-8", $row['kratkiOpis']);
    $opis = iconv("Windows-1250", "UTF-8", $row['opis']);
    echo "{$row['naziv']}|$kratkiOpis|$opis|{$row['sastojci']}|{$row['cal']}|{$row['cijena']}|{$row['image']}";

}else{
    echo "Ups, došlo je do pogreške. Molimo vas pokušajte ponovo kasnije.";

}



mysqli_close($connection);
exit();

