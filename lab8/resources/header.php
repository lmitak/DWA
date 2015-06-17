<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 2.4.2015.
 * Time: 9:00
 */

echo "
    <!DOCTYPE html>
    <html>
            <head lang='en'>
                <meta charset='UTF-8'>
                <link href='css/grid.css' type='text/css' rel='stylesheet'>
                <link href='css/style.css' type='text/css' rel='stylesheet'>
                <title>ZKD</title>
            </head>
            <body>

                    <header >
                        <div class=\"row\">
                        <div class=\"column column-12\">
                            <img src='resources/slasticeLogoReC.png' width=\"80px\" height=\"130px\">
                            <aside class=\"column column-4\" id=\"hAs\">
                                <p>".$_SESSION['user']."</p>
                                <form action=\"logout.php\" method=\"POST\">
                                <input type=\"submit\"  value=\"Odjava\"/>
                                </form>
                            </aside>
                        </div></div>
                    </header>
";