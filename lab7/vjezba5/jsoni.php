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

include_once("../resources/header.php");


echo "<div class='row'>";
echo "<div id='proizvod_json'>";
echo "<script>
    data = {$data};


</script>
";
echo "</div>";
echo <<<EOF
<button type="button" onclick="prosli()">Prosli</button>
<button type="button" onclick="sljedeci()">Sljedeci</button>
EOF;

echo "</div>";

include_once("../resources/bootie.php");

