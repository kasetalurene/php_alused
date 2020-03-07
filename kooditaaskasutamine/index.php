<?php
/**
 * file name: index.php;
 * autor: Rene Kasetalu;
 * date: 07.03.2020;
 */
require 'fcs.php'; // võtan külge kõik menüü loomiseks, failinime kontrollimiseks

$menu = array(
  'Avaleht' => 'avaleht',
  'Portfoolio' => 'portfoolio',
  'Kaart' => 'kaart',
  'Kontakt' => 'kontakt',
  'Firmast' => 'about'
);
pageMenu($menu);
if($_SERVER['SCRIPT_NAME'] == $_SERVER['REQUEST_URI']){
  pageContent('avaleht', $menu);
  } else {
  pageContent($_GET['leht'], $menu);
}



