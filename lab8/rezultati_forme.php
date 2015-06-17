<?php
/**
 * Created by PhpStorm.
 * User: lmita_000
 * Date: 28.5.2015.
 * Time: 9:58
 */

if(is_string($_POST['naziv'])){
    require_once('resources/db_connect.php');

    $sql = "SELECT * FROM sheet1
            JOIN tipovi_podataka ON tip_id = TipProizvoda
            WHERE NazivProizvoda LIKE '%{$_POST['naziv']}%' OR TipoviDelicija LIKE '%{$_POST['naziv']}%'";
    $res = mysqli_query($connection, $sql);
    include_once("resources/header.php");
    if(mysqli_num_rows($res) > 0){

        echo "<table>";
        while($row = mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo "<td><p>{$row['NazivProizvoda']}</p></td><td>{$row['OpisProizvoda']}</td><td>{$row['TipoviDelicija']}</td><td>{$row['Cijena']}</td>";
            echo "</tr>";

        }
        echo "</table>";

    }else{
        echo "Vraćeno je 0 rezultata";
    }
    include_once("resources/bootie.php");



}else{
    echo "htio si me prevariti a?, DJ ubre!";
}