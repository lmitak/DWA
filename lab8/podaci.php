<?php
session_start();
 //header('Content-type: application/json; charset=UTF-8');

$file_handle = fopen("http://stipe.predanic.com/TVZ/podaci.php?proizvodjac=&proizvod=", "r");
$line_of_text = fgets($file_handle);
$json = json_decode($line_of_text);

include_once("resources/header.php");
include_once("resources/navigation.php");
?>
<div class="column column-8">
    <table>
        <tr style="color:blue;">
            <td>Proizvod</td>
            <td>Cijena</td>
            <td>Količina</td>
            <td>Tvrtka</td>
        </tr>


<?php
for($i = 0; $i < sizeof($json); $i++){

    $proizvod = $json[$i];
    echo "<tr>";
    echo "<td>" .$proizvod->{'proizvod'}. "</td>";
    echo "<td>" .$proizvod->{'cijena'}. " kn</td>";
    echo "<td>" .$proizvod->{'stanje_na_skladistu'}. " kom</td>";
    echo "<td>" .$proizvod->{'naziv'}. "</td>";
    echo "</tr>";


}

?>
    </table>
</div>


<?php
fclose($file_handle);
include_once("resources/bootie.php");

