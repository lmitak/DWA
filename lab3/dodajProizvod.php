<?php
session_start();


include_once("resources/db_connect.php");
include_once("resources/header.php");

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

                    <article class=\"column column-4\">
                    <h2>Dodaj novi proizvod</h2>
                    <form method='post' action='addItem.php?a=1'>
                        <label for='naziv'>Naziv proizvoda</label>
                        <input type='text' name='naziv' id='naziv'/><br/>
                        <label for='tip'>Tip proizvoda</label>
                        <select id='tip'>";
$sql = "SELECT TipoviDelicija from tipovi_podataka";
$res = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($res)){
    echo "<option value='".$row['TipoviDelicija']."'>".$row['TipoviDelicija']."</option>";
}


echo                     "</select><br/>
                         <label for='opis'>Opis proizvoda: </label>
                         <input type='text' name='opis' id='opis'/>
                         <br/>
                         <label for='vege'>Vegetarijanski: </label>
                         <input type='radio' name='vege' id='vege' value='Da' checked/>
                         <input type='radio' name='vege' id='vege' value='Ne'/>
                         <br/>
                         <label for='halal'>Halal: </label>
                         <input type='radio' name='halal' id='halal' value='Da' checked/>
                         <input type='radio' name='halal' id='halal' value='Ne'/>
                         <br/>
                         <label for='koser'>Košer: </label>
                         <input type='radio' name='koser' id='koser' value='Da' checked/>
                         <input type='radio' name='koser' id='koser' value='Ne'/>
                         <br/>
                         <label for='alergeni'>Alergeni: </label>
                         <select id='alergeni'>";

$sql = "SELECT naziv from alergeni";
$res = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($res)){
    echo "<option value='".$row['naziv']."'>".$row['naziv']."</option>";
}

echo <<<EOF
                        <br/>
                        <label for='cijena'>Cijena: </label>
                        <input type='number' name='cijena' id='cijena'> kn
                        <br/>
                        <input type='submit'/>
                    </form>
                    <br><br>
                    <h2>Dodaj kategoriju:</h2>
                    <form method='post' action='addItem.php?a=2'>
                        <label for="category">Nova kategorija: </label>
                        <input type="text" name="category" id="category"/>
                        <input type="submit" value="Dodaj"/>
                    </form>
                    <br><br>
                    <h2>Dodaj alergen:</h2>
                    <form method='post' action='addItem.php?a=3'>
                    <label for="category">Novi alergen: </label>
                        <input type="text" name="alergen" id="alergen"/>
                        <input type="submit" value="Dodaj"/>
                    </form>
                    </article>
                </div>
EOF;


include_once("resources/bootie.php");