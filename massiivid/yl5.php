<?php
/**
 * file name: yl5.php;
 * autor: Rene Kasetalu;
 * date: 29.01.2020;
 */

/** osa 1 Õppeained */

$Oppeained = array("usuõpetus", "rahvatants", "nõukogude_eesti_ajalugu", "peotants", "elektrotehnika_teoreetilised_alused");
sort($Oppeained);
foreach ($Oppeained as $aine) {
    echo $aine . "<br>";
}

echo '<hr>';

/** osa 2 Pallivise */

$nimed = array('Martin', 'Hardi', 'Juhan', 'Tiina', 'Sirje', 'Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);

echo "oselejaid kokku: " . count($nimed) . "<br>";
echo "keskmine tulemus: " . array_sum($pallivisked) / count($pallivisked) . "<br>";
echo "parim tulemus: " . max($pallivisked) . " ja selle sooritas " . $nimed[0] . "<br>";

echo '<hr>';

/** osa 3 Raamatud */


$raamatud = array(
    'raamat1' => array('Pealkiri' => 'Grillime mõnuga', 'Autor' => 'tundmatu', 'Žanr' => "toit"),
    'raamat2' => array('Pealkiri' => 'Kolm tundi', 'Autor' => 'Roslund', 'Žanr' => "põnevik"),
    'raamat3' => array('Pealkiri' => 'Bancrofti strateegia', 'Autor' => 'Ludlum', 'Žanr' => "krimka"),
);
sort($raamatud);
foreach ($raamatud as $raamat => $andmed) {
    foreach ($andmed as $key => $detailid) {
        echo $key . ": " . $detailid . "<br>";
    }
}
echo "Raamatuid on kokku: " . count($raamatud) . " tk";
echo '<hr>';