<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 6.4.2015.
 * Time: 10:55
 */
require_once("DBcon.php");
include_once("header.php");

echo <<<EOF
<article class="jela" id="predjela">
        <div class="row">
            <div class="column column-6" id="jelaContainer">
                <h2>Glavna jela:</h2>
                <ul>
EOF;

$query = "SELECT * FROM jelo
          WHERE idKategorije = 2";

$res = mysqli_query($connection, $query) or die(mysqli_errno($connection));

while($row = mysqli_fetch_assoc($res)){

    echo <<<EOL
        <li>
            <a class="izbor" onmouseover="promjeniSliku('{$row['image']}', 'slika')" image='{$row['image']}' onclick="detaljnije('{$row['naziv']}')">
                <h4>{$row['naziv']}</h4>
                <p>{$row['kratkiOpis']}</p>
            </a>
        </li>
EOL;

}




echo <<<EOF
               </ul>
            </div>
            <div class="column column-6" id="slika">

            </div>
           <!-- <div id="status">hello</div>-->
        </div>
    </article>
EOF;



include_once("bootie.php");