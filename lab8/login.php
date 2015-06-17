<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 26.3.2015.
 * Time: 9:41
 */
    session_start();

    include_once("resources/db_connect.php");
    $user_password = md5($_POST['password']);
    $sql = "SELECT * FROM korisnik WHERE us = '{$_POST['username']}' AND pw = '{$user_password}'";
    $res = mysqli_query($connection, $sql);

    if(mysqli_num_rows($res))
    {
           
        $_SESSION['user'] = $_POST['username'];
        $row = mysqli_fetch_assoc($res);
        include_once('resources/header.php');
        echo "
                    <aside class='row' id='reklama'>
                        <h2>Ovo je neka reklama</h2>
                        <button type='button' id='zatvori_btn' onclick='gasi(this)'>Zatvori</button>
                    </aside>";


        echo "<div class='row'>";
        include_once('resources/navigation.php');


        echo        "<article class=\"column column-7\">
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

?>