<?php
/**
 * Created by PhpStorm.
 * User: lmita_000
 * Date: 28.5.2015.
 * Time: 10:33
 */
session_start();
include_once("resources/db_connect.php");


include_once("resources/header.php");
include_once("resources/navigation.php");

$query = "SELECT * FROM sheet1";

$res = mysqli_query($connection, $query);
//gornji dio tijela ove stranice


echo" <article class=\"column column-10\">
                        <input type='text' name='filterJQ' id='filterJQ' placeholder='Pretraži'/>
                        <input type='submit' value='Pretraži' id='submit'>
                        <table id='popisJQ'>";

while($row = mysqli_fetch_assoc($res)){
    echo "<tr>
            <td>".$row['NazivProizvoda']."</td>
            <td>".$row['TipProizvoda']."</td>";
    if($row['OpisProizvoda'] === null){
        echo "<td>&nbsp</td>";
    }else
    {
        echo "<td>".$row['OpisProizvoda']."</td>";
    }
    if($row['Vegetarijanski'] === null){
        echo "<td>&nbsp</td>";
    }else
    {
        echo "<td>".$row['Vegetarijanski']."</td>";
    }
    if($row['Halal'] === null){
        echo "<td>&nbsp</td>";
    }else
    {
        echo "<td>".$row['Halal']."</td>";
    }
    if($row['Košer'] === null){
        echo "<td>&nbsp</td>";
    }else
    {
        echo "<td>".$row['Košer']."</td>";
    }
    if($row['Alergeni'] === null){
        echo "<td>&nbsp</td>";
    }else
    {
        echo "<td>".$row['Alergeni']."</td>";
    }
    if($row['Cijena'] === null){
        echo "<td>&nbsp</td>";
    }else
    {
        echo "<td>".$row['Cijena']."</td>";
    }
    echo "</tr>";
}


//donji dio tijela ove stranice

echo                    "</table>
                    </article>
";


include_once("resources/bootie.php");
