<?php
session_start();
//header('Content-type: application/json; charset=UTF-8');

//faks (vagrant)
/*$dbHost = "localhost";
$dbUser = "root";
$dbPass = "123";
$dbName = "ods_db";
*/
//doma
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "ods_db";

// Set default timezone
date_default_timezone_set('UTC');
error_reporting(E_ALL);
$data;
try {
    /**************************************
     * Create databases and                *
     * open connections                    *
     **************************************/

    // Create (connect to) SQLite database in file
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);

    // Prepare INSERT statement to SQLite3 file db
    $proizvod=htmlspecialchars($_GET['proizvod']);
    $tip= htmlspecialchars($_GET['vrsta']);

    $select = "SELECT * FROM sheet1
              JOIN tipovi_podataka ON tip_id = TipProizvoda
              WHERE sheet1.NazivProizvoda LIKE :proizvod
              AND tipovi_podataka.TipoviDelicija LIKE :tip";
    $stmt = $db->prepare($select);


    // Bind parameters to statement variables
    $stmt->bindValue(':proizvod', "%".$proizvod."%");
    $stmt->bindValue(':tip',"%".$tip."%");


    // Execute statement
    $stmt->execute();
    $result = $stmt->fetchAll();
    $data = json_encode($result);




}
catch( PDOException $Exception ) {
    echo $Exception->getMessage() ."\n";
}
if(!isset($_GET['br'])){
    $br = 0;
}else
    $br = $_GET['br'];

$result = json_decode($data);

include_once("resources/header.php");


echo "<div class='row'>";
echo "<div id='proizvod'";
echo "<script>
    data = {$data};

    var proizvod = document.getElementById(\"proizvod\");

    var tablica = document.createElement(\"table\");
    proizvod.appendChild(tablica);
    //naziv
    var redakNaziv = document.createElement(\"tr\");
    tablica.appendChild(redakNaziv);

    var titleNaziv = document.createElement(\"td\");
    titleNaziv.innerHTML = \"Naziv: \";
    redakNaziv.appendChild(titleNaziv);
    var valueNaziv = document.createElement(\"td\");
    valueNaziv.innerHTML = data[i][\"NazivProizvoda\"];
    redakNaziv.appendChild(valueNaziv);
    //opis
    var redakOpis = document.createElement(\"tr\");
    tablica.appendChild(redakOpis);

    var titleOpis = document.createElement(\"td\");
    titleOpis.innerHTML = \"Opis: \";
    redakOpis.appendChild(titleOpis);
    var valueOpis = document.createElement(\"td\");
    valueOpis.innerHTML = data[i][\"OpisProizvoda\"];
    redakOpis.appendChild(valueOpis);
    //tip
    var redakTip = document.createElement(\"tr\");
    tablica.appendChild(redakTip);

    var titleTip = document.createElement(\"td\");
    titleTip.innerHTML = \"Tip: \";
    redakTip.appendChild(titleTip);
    var valueTip = document.createElement(\"td\");
    valueTip.innerHTML = data[i][\"TipoviDelicija\"];
    redakTip.appendChild(valueTip);
    //cijena
    var redakCijena = document.createElement(\"tr\");
    tablica.appendChild(redakCijena);

    var titleCijena = document.createElement(\"td\");
    titleCijena.innerHTML = \"Cijena: \";
    redakCijena.appendChild(titleCijena);
    var valueCijena = document.createElement(\"td\");
    valueCijena.innerHTML = data[i][\"Cijena\"] + \" kn\";
    redakCijena.appendChild(valueCijena);

    var buttonDalje = document.createElement(\"button\");
    buttonDalje.innerHTML = \"NAPRIJED\";
    buttonDalje.setAttribute(\"onclick\", \"povecaj()\");
    buttonDalje.setAttribute(\"type\", \"button\");
    buttonDalje.setAttribute(\"id\", \"btnNext\");

    buttonDalje.onclick = function(){
        i++;
    };
    proizvod.appendChild(buttonDalje);

    var buttonPrije = document.createElement(\"button\");
    buttonPrije.setAttribute(\"onclick\", i--);
    buttonPrije.innerHTML = \"NATRAG\";
    buttonDalje.onclick = function(){
        i--;
    };
    proizvod.appendChild(buttonPrije);



</script>
";
echo "</div></div>";

include_once("resources/bootie.php");

