<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 2.4.2015.
 * Time: 8:50
 */
session_start();
include_once("resources/db_connect.php");


include_once("resources/header.php");

$query = "SELECT * FROM sheet1";

$res = mysqli_query($connection, $query);
//gornji dio tijela ove stranice
echo "
                <div class=\"row\">
                    <nav class=\"column column-2\">
                        <ul>
                            <li><a href='login.php'>Početna</a></li>
                            <li><a href='lista_proizvoda.php'>Proizvodi</a></li>
                            <li><a href='dodajProizvod.php'>Dodaj proizvod</a></li>
                            <li>Izbornik</li>
                        </ul>
                    </nav>

                    <article class=\"column column-10\">
                        <input type='text' name='filter' id='filter' placeholder='Pretraži'
                        onkeyup='myFunction()'/>
                        <table id='popis'>";

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
                </div>
";


include_once("resources/bootie.php");



