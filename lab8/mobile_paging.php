<?php
/**
 * Created by PhpStorm.
 * User: lmita_000
 * Date: 17.6.2015.
 * Time: 20:25
 */
?>
<!DOCTYPE html>
<html>
            <head lang='en'>
                <meta charset='UTF-8'>
                <link href='css/grid.css' type='text/css' rel='stylesheet'>
                <link href='css/style.css' type='text/css' rel='stylesheet'>
                <link href='css/jquery.mobile-1.4.5.min.css' rel='stylesheet'>
                <title>ZKD</title>
            </head>

<body>
    <div data-role='page' id="page_search">
        <div data-role='header'>
            <h1>ZKD</h1>
        </div>
        <div data-role='main' class='ui-content' id="mobile_container">
                <label for='tekst'>Upiši deliciju koji tražiš</label>
                <input type="text" id="tekst" name="tekst">
                <!--<input type="button" id="pretrazi_btn" href="#page_item" value="Pretraži">-->
            <a href="#page_item" class="ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c"
               data-role="button" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="c"
               id="pretrazi_btn_paging">
                   Pretraži
            </a>
        </div>
        <div data-role='footer'>
            <p>Copyright</p>
        </div>
    </div>

    <div data-role='page' id="page_item">
        <div data-role='header'>
            <a href="#page_search" class="ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c"
               data-role="button" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="c">
                <img src="css/images/icons-png/arrow-l-black.png"/>
            </a>
            <h1>Proizvodi</h1>
        </div>
        <div data-role='main' class='ui-content'>
            <div id="lukin_container"></div>
        </div>
        <div data-role="footer" id="mobileFooter">
            <button type="button" id="prev">Previous</button>
            <button type="button" id="next">Next</button>
        </div>

    </div>
</body>
            <script src='js/jquery.js'></script>
            <script src='js/jquery.mobile-1.4.5.min.js'></script>
            <script src="js/jquery_code.js"></script>

</html>
