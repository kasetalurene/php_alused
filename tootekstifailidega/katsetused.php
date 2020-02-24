<?php

/**
 * file name: katsetused.php;
 * autor: Rene Kasetalu;
 * date: 24.02.2030;
 */


//faili nimi
$allikas = 'lipsum.txt';
//ava fail
$minu_fail = fopen($allikas, 'w');

//faili nimi
$allikas = 'lipsum.txt';
//ava fail
$minu_fail = fopen($allikas, 'w');
//faili sulgemine
fclose($minu_fail);

// Teksti kirjutamine

$allikas = 'lipsum.txt';
$minu_fail = fopen($allikas, 'w');
//lisatav tekst
$tekst = "lorem ipsum";
//faili kirjutamine
fwrite($minu_fail, $tekst);
fclose($minu_fail);


$allikas = 'lipsum.txt';
$minu_fail = fopen($allikas, 'w');
//lisatav tekst
$tekst = "lorem ipsum";
$tekst2= "dolor sit amet";
//faili kirjutamine
fwrite($minu_fail, $tekst);
fwrite($minu_fail, $tekst2);
fclose($minu_fail);


// Tekstifaili kirjutamise koodi lühem versioon

$allikas = 'lipsum.txt';
$tekst = "Sed sed diam\n";
//avab-kirjutab-sulgeb
file_put_contents($allikas, $tekst);

$allikas = 'lipsum.txt';
$tekst = "Nunc non lorem\n";
//avab-kirjutab-sulgeb
file_put_contents($allikas, $tekst, FILE_APPEND);


// Faili kustutamine ja ümbernimetamine

unlink('lipsum.txt');

rename('vananimi.txt','uusnimi.txt');

//faili nimi
$allikas = 'loomad.txt';
//faili avamine
$minu_fail = fopen($allikas, 'r');
//faili sisu kuvamine
$faili_sisu = fread($minu_fail, 30);
echo $faili_sisu;
//faili sulgemine
fclose($minu_fail);

//faili nimi
$allikas = 'loomad.txt';
//faili avamine
$minu_fail = fopen($allikas, 'r');
//faili sisu kuvamine
$faili_sisu = fread($minu_fail, filesize($allikas));
echo $faili_sisu;
//faili sulgemine
fclose($minu_fail);

//faili nimi
$allikas = 'loomad.txt';
//faili avamine
$minu_fail = fopen($allikas, 'r');
//faili sisu kuvamine
$faili_sisu = fread($minu_fail, filesize($allikas));
echo nl2br($faili_sisu);
//faili sulgemine
fclose($minu_fail);

//Tekstifaili lugemise lühem funktsioon

$allikas = 'loomad.txt';
echo nl2br(file_get_contents($allikas));

$allikas = 'loomad.txt';
$minu_fail = fopen($allikas, 'r');
//loeb esimese rea
$faili_sisu = fgets($minu_fail);
echo $faili_sisu;
fclose($minu_fail);

$allikas = 'loomad.txt';
$minu_fail = fopen($allikas, 'r');
//kõikide ridade kuvamine
while(!feof($minu_fail)){
    $faili_sisu = fgets($minu_fail);
    echo nl2br($faili_sisu);
}

fclose($minu_fail);

// Tekstifaili info

$allikas = 'loomad.txt';
$suurus = filesize($allikas);
$viimati_muudetud = date('d.m.Y G:i' ,filectime($allikas));
echo 'Faili nimi: '.$allikas.'<br>';
echo 'Faili suurus: '.$suurus.'baiti<br>';
echo 'Viimati muudetud: '.$viimati_muudetud.'<br>';

$allikas = 'kataloog/loomad.txt';
$faili_info = pathinfo($allikas);
echo $faili_info['dirname'].'<br>';
echo $faili_info['basename'].'<br>';
echo $faili_info['filename'].'<br>';
echo $faili_info['extension'].'<br>';

//Tekstifailis saadud andmete töötlemine

$allikas = 'numbrid.txt';
$minu_fail = file($allikas);
print_r($minu_fail);
//väljund
/*
    [0] => 12
    [1] => 13
    [2] => 3
    [3] => 54
    [4] => 6
    [5] =>
    [6] => 34
    [7] => 3
    [8] => 23
    [9] =>
    [10] => 23
    [11] => 44

$allikas = 'numbrid.txt';
$minu_fail = file($allikas, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
print_r($minu_fail);
//väljund
/*
(
    [0] => 12
    [1] => 13
    [2] => 3
    [3] => 54
    [4] => 6
    [5] => 34
    [6] => 3
    [7] => 23
    [8] => 23
    [9] => 44
)
*/


