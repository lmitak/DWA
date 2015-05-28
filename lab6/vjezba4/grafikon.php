<?php

require_once("resources/db_connect.php");

$sql = "SELECT COUNT(*) FROM tipovi_podataka";
$res = mysqli_query($connection, $sql);
$nmbr = mysqli_fetch_array($res);

$ukupanBroj = 0;
for($i = 1; $i < $nmbr[0] + 1; $i++){
    $sql = "SELECT COUNT(*) AS jushan FROM sheet1 WHERE TipProizvoda = '{$i}'";
    $res = mysqli_query($connection, $sql);
    if(mysqli_num_rows($res) > 0)
    {
        $row = mysqli_fetch_assoc($res);
        if($row['jushan'] != 0)
        $skupBrojeva[] = $row['jushan'];
        $ukupanBroj += $row['jushan'];

    }

}

//omjer sa 360 stupnjeva
for($i = 0; $i < count($skupBrojeva); $i++){
    $skupUOmjerima[$i] = ($skupBrojeva[$i] / $ukupanBroj) * 360;
}


// create image
$image = imagecreatetruecolor(500, 500);



$startDegree = 0;
$red = 0;
$green = 0;
$blue = 0;
for($i = 0; $i < count($skupUOmjerima); $i++){
    $red += 20;
    $green += 30;
    $blue += 40;
    $boja = imagecolorallocate($image, $red, $green, $blue);
    imagefilledarc($image, 250, 250, 500, 500,  $startDegree,  $skupUOmjerima[$i], $boja, IMG_ARC_ROUNDED );
    $startDegree +=  $skupUOmjerima[$i];
}


// flush image
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);


