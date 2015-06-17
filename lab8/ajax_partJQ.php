<?php
/**
 * Created by PhpStorm.
 * User: lmita_000
 * Date: 28.5.2015.
 * Time: 10:44
 */
require_once("resources/db_connect.php");

$brojilo = $_GET['brojilo'];
$limit_start_pos = $brojilo * 10;


if($_GET['upit'] == "")
{
    $upit = "SELECT * FROM sheet1
          JOIN tipovi_podataka
          ON tip_id = TipProizvoda
          LIMIT {$limit_start_pos}, 10";

    $countUpit = "SELECT COUNT(*) FROM sheet1 JOIN tipovi_podataka ON tip_id = TipProizvoda";
}else{
    $upit = "SELECT * FROM sheet1
          JOIN tipovi_podataka
          ON tip_id = TipProizvoda
          WHERE TipoviDelicija LIKE '%{$_GET['upit']}%' OR NazivProizvoda LIKE '%{$_GET['upit']}%'
          LIMIT {$limit_start_pos},10";
    $countUpit = "SELECT COUNT(*) FROM sheet1 JOIN tipovi_podataka ON tip_id = TipProizvoda
          WHERE TipoviDelicija LIKE '%{$_GET['upit']}%' OR NazivProizvoda LIKE '%{$_GET['upit']}%'";
}

$res = mysqli_query($connection, $upit);
$countRes = mysqli_query($connection, $countUpit);
if($res != null){
    $array = array();
    while($row = mysqli_fetch_assoc($res)){
        array_push($array, $row);
    }
    $count = mysqli_fetch_array($countRes);
    array_push($array, $count[0]);
    echo json_encode($array);
}else{
    echo json_encode(array('ERROR'=> 'Nema podataka'));
}