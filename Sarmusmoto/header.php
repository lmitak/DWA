<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 6.4.2015.
 * Time: 10:02
 * Ovo je zaglavlje svake stranice
 */



$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);;
$lang = "HRV";
$naslovi = ["Predjela", "Glavna jela", "Deserti", "Pića"];
$tekst_lokacija = "Lokacija";

if(isset($_GET['lang'])){
    if ($_GET['lang'] == "ENG") {
        $lang = "ENG";
        $naslovi = ["Appetizers", "Main Course", "Desserts", "Drinks"];
        $tekst_lokacija = "Location";

    }
}else
{
    header("Location: $curPageName?lang=HRV");
}





    echo <<<EOF
<!DOCTYPE html>
<html>
<head lang="hr">
    <meta charset="UTF-8">
    <title>Sarmusmoto</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:700italic' rel='stylesheet' type='text/css'>
    <link href="css/grid.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">

</head>
<body>
    <header>
        <div class="row">
            <div class="column column-12">
                <div id='lang_container' class='column-2'>
                <input type="hidden" id="jezik" value="$lang"/>
                    <ul>
                        <li><a href="$curPageName?lang=HRV" id='hrv'>HRV</a></li>
                        <li>/</li>
                        <li><a href="$curPageName?lang=ENG" id='eng'>ENG</a></li>
                    </ul>
                </div>
                <h1>Sarmusmoto</h1>
                <h2>{$tekst_lokacija}: Ilica 32a</h2>
                <h2>Tel: (+385) 01 222 33 44</h2>
            </div>
        </div>
    </header>

    <nav>
        <div class="row">
            <ul>
                <li><a href="predjela.php?lang=$lang">
                    <div class="column column-3 link" >
                    <img src="Resource/appetizers.jpg"/>
                    <h3>{$naslovi[0]}</h3>
                    </div></a>
                </li>
                <li><a href="glavnoJelo.php?lang=$lang">
                    <div class="column column-3 link" >
                        <img src="Resource/main_dish.jpg"/>
                        <h3>{$naslovi[1]}</h3>
                    </div></a>
                </li>
                <li><a href="desert.php?lang=$lang">
                    <div class="column column-3 link" >
                        <img src="Resource/desserts.jpg"/>
                        <h3>{$naslovi[2]}</h3>
                    </div></a>
                </li>
                <li><a href="pica.php?lang=$lang">
                    <div class="column column-3 link" >
                        <img src="Resource/soft-drinks.jpg"/>
                        <h3>{$naslovi[3]}</h3>
                    </div></a>
                </li>
            </ul>

        </div>
    </nav>
EOF;

