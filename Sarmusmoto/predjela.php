<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 6.4.2015.
 * Time: 10:55
 */

$hostname = "localhost";
$user = "root";
$pw = "";
$dbName = "sarmusmoto";

iconv_set_encoding("internal_encoding", "UTF-8");
iconv_set_encoding("output_encoding", "UTF-8");
iconv_set_encoding("input_encoding", "UTF-8");

include_once("header.php");


echo <<<EOF
<article class="jela" id="predjela">
        <div class="row">
            <div class="column column-6" id="jelaContainer">
                <h2>$naslovi[0]:</h2>
                <ul>
EOF;


try{
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbName", $user, $pw);
    if($lang == "ENG")
        $sql = "SELECT id, naziv, kratkiOpis, image  FROM jelo WHERE idKategorije = 1 AND idJezika = 2";
    else
        $sql = "SELECT id, naziv, kratkiOpis, image  FROM jelo WHERE idKategorije = 1 AND idJezika = 1";
    foreach($dbh->query($sql) as $row){

        echo <<<EOL
        <li>
            <a class="izbor" onmouseover="promjeniSliku('{$row['image']}', 'slika')" image='{$row['image']}' onclick="detaljnije('{$row['id']}', '$lang')">
                <h4>{$row['naziv']}</h4>
                <p>{$row['kratkiOpis']}</p>
            </a>
        </li>
EOL;
    }
    //close database connection
    $dbh = null;

}catch (PDOException $e){
    echo "alo ".$e->getMessage();
};



echo <<<EOF
               </ul>
            </div>
            <div class="column column-6" id="slika">

            </div>
        </div>
    </article>
EOF;

include_once("bootie.php");