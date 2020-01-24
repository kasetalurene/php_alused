<!--
 * file name: index.html;
 * autor: Rene Kasetalu;
 * date: 23.01.2020;
-->

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kera arvutus</title>
</head>
<body>
<h1>Vastused</h1>
<?php
//Andmete lisamine muutujasse.
$kera = $_GET['kera'];
$koonus_r = $_GET['Koonuse_raadius'];
$koonus_h = $_GET['Koonuse_kõrgus'];
$silinder_r = $_GET['Silindri_raadius'];
$silinder_h = $_GET['Silindri_kõrgus'];
//Arvutamine.
$kera_ruumala = 4/3*3.14*pow($kera,3);
$silindri_ruumala = 3.14*pow($koonus_r, 2)*$silinder_h;
$koonuse_ruumala = 3.14*pow($koonus_r, 2)*($koonus_h/3);

echo 'Kera ruumala on: '.$kera_ruumala.'<br>';
echo 'Koonuse ruumala on: '.$koonuse_ruumala.'<br>';
echo 'Silindri ruumala on: '.$silindri_ruumala.'<br>';
?>
</body>
</html>
