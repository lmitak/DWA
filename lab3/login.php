<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 26.3.2015.
 * Time: 9:41
 */
    session_start();
    $username = "luka";
    $password = "123";


    if ((($username == $_POST['username']) && ($password == $_POST['password'])))
    {

        $_SESSION['user'] = $_POST['username'];

        echo "
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


                    <aside class='row' id='reklama'>
                        <h2>Ovo je neka reklama</h2>
                        <button type='button' id='zatvori_btn' onclick='gasi(this)'>Zatvori</button>
                    </aside>

                    <div class=\"row\">
                    <nav class=\"column column-4\">
                        <ul>
                            <li><a href='login.php'>Početna</a></li>
                            <li><a href='lista_proizvoda.php'>Proizvodi</a></li>
                            <li><a href='dodajProizvod.php'>Dodaj proizvod</a></li>
                            <li>Izbornik</li>
                        </ul>
                    </nav>

                    <article class=\"column column-7\">
                        <table id='osobniPodaci'>
                            <tr>
                                <th>Osobni podaci</th>
                            </tr>
                            <tr>
                                <td>Ime:</td>
                                <td>Luka</td>
                            </tr>
                            <tr>
                                <td>Prezime:</td>
                                <td>Mitak</td>
                            </tr>
                            <tr>
                                <td>Mjesto:</td>
                                <td>Zagreb</td>
                            </tr>
                            <tr>
                                <td>Datum rođenja:</td>
                                <td>25.06.1993.</td>
                            </tr>
                        </table>
                        <table id='skolovanje'>
                            <tr>
                                <th>Podaci o školovanju</th>
                            </tr>
                            <tr>
                                <td>Osnovna škola:</td>
                                <td>Osnovna škola Šestine</td>
                            </tr>
                            <tr>
                                <td>Srednja škola:</td>
                                <td>Tehnička škola Ruđera Boškovića</td>
                            </tr>
                            <tr>
                                <td>Fakultet:</td>
                                <td>Tehničko Veleučilište u Zagrebu</td>
                            </tr>
                        </table>

                        <table id='znanja'>
                            <tr>
                                <th>Znanja i vještine</th>
                            </tr>
                            <tr>
                                <td>Poznavanje Jave, Android-a, HTML-a, CSS-a, PHP-a, Adobe Photoshop-a, Adobe Illustrator-a</td>
                            </tr>
                            <tr>
                                <td>Osnovno poznavanje C++, C#, 3D modeliranja</td>
                            </tr>
                        </table>
                    </article>
                    </div>

                    <footer>
                         <div class=\"row\">
                            <div class=\"column column-12\">
                                <p>Copyright ZKD, 2014.</p>
                            </div>
                        </div>
                    </footer>
            <script type='text/javascript' src='js/script.js'></script>
            </body>
            </html>
        "
;

    } else{
        header('Location: login.html');
    }
