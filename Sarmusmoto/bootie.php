<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 6.4.2015.
 * Time: 10:48
 * Ovo je podnožje svake stranice
 */

$radno_vrijeme = "Otvoreni smo od 8 do 20";
$pracenje = "Pratite nas";
$kontakt = "Kontakt";


if($lang == "ENG") {
    $radno_vrijeme = "We are opened from 8am till 8pm";
    $pracenje = "Follow us";
    $kontakt = "Contact";

}

echo <<<EOF
   <footer>
        <div class="row">
            <div class="column column-4">
                <h2>$tekst_lokacija:</h2>
                <p>Ilica 32a</p>
                <p>10 000 Zagreb</p>
                <p>$radno_vrijeme</p>
            </div>
            <div class="column column-4">
                <h2>$pracenje:</h2>
                <p><a href="#">Blog</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="#">Facebook</a></p>
            </div>
            <div class="column column-4">
                <h2>$kontakt:</h2>
                <p>Tel: (+385) 01 222 33 44</p>
                <p>sarmusmoto@info.com</p>
            </div>
        </div>
    </footer>

    <script src="Js/skripta.js" type="text/javascript"></script>
</body>
</html>
EOF;
