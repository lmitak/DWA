<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 6.4.2015.
 * Time: 10:02
 */

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
                <h1>Sarmusmoto</h1>
                <h2>Lokacija: Ilica 32a</h2>
                <h2>Tel: (+385) 01 222 33 44</h2>
            </div>
        </div>
    </header>

    <nav>
        <div class="row">
            <ul>
                <li><a href="predjela.php">
                    <div class="column column-3 link" >
                    <img src="Resource/appetizers.jpg"/>
                    <h3>Predjela</h3>
                    </div></a>
                </li>
                <li><a href="glavnoJelo.php">
                    <div class="column column-3 link" >
                        <img src="Resource/main_dish.jpg"/>
                        <h3>Glavno jela</h3>
                    </div></a>
                </li>
                <li><a href="desert.php">
                    <div class="column column-3 link" >
                        <img src="Resource/desserts.jpg"/>
                        <h3>Deserti</h3>
                    </div></a>
                </li>
                <li><a href="pica.php">
                    <div class="column column-3 link" >
                        <img src="Resource/soft-drinks.jpg"/>
                        <h3>Pića</h3>
                    </div></a>
                </li>
            </ul>

        </div>
    </nav>
EOF;
