<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 2.4.2015.
 * Time: 11:54
 */

include_once("resources/db_connect.php");

switch($_GET['a']){
    case 1:
        $tipProizvoda = $_POST['tip'];
        $alergeni = $_POST['alergeni'];
        $cijena = $_POST['cijena'];
        $ispravnost = true;
        /**Provjera da li se da su preneseni ispravni podaci**/
        if(!is_numeric($cijena))
            $ispravnost = false;


        if($ispravnost)
        {
            echo "Ups, došlo je do pogreške, fafaj ga!";
        }else{
            $sql = "INSERT INTO sheet1(NazivProizvoda, TipProizvoda, OpisProizvoda, Vegetarijanski, Halal, Košer, Alergeni, Cijena)
        VALUES('{$_POST['naziv']}', '{$_POST['tip']}', '{$_POST['opis']}', '{$_POST['vege']}', '{$_POST['halal']}',
        '{$_POST['koser']}', '{$_POST['alergeni']}', {$_POST['cijena']})";

            $res = mysqli_query($connection, $sql);

            if(!$res){
                echo "<p>Ups došlo je do pogreške, molimo vas da pokušate ponovo</p>";
                header("refresh:10; url=dodajProizvod.php");
            }else{
                echo "<p>Uspješno dodan proizvod</p>";
                header("refresh:10; url=dodajProizvod.php");
            }

        }
        break;
    case 2:
        $sql = "INSERT INTO tipovi_podataka(TipoviDelicija) VALUES('{$_POST['category']}')";
        $res = mysqli_query($connection, $sql);

        if(!$res){
            echo "<p>Ups došlo je do pogreške, molimo vas da pokušate ponovo</p>";
            header("refresh:5; url=dodajProizvod.php");
        }else{
            echo "<p>Uspješno dodana nova kategorija.</p>";
            header("refresh:5; url=dodajProizvod.php");
        }
        break;
    case 3:
        $sql = "INSERT INTO alergeni(naziv) VALUES('{$_POST['alergen']}')";
        $res = mysqli_query($connection, $sql);

        if(!$res){
            echo "<p>Ups došlo je do pogreške, molimo vas da pokušate ponovo</p>";
            header("refresh:5; url=dodajProizvod.php");
        }else{
            echo "<p>Uspješno dodan alergen.</p>";
            header("refresh:5; url=dodajProizvod.php");
        }
        break;
    default:
        echo "<p>Čini se da si nešto sjebo :/</p>";
        break;
}





