<?php
/**
 * file name: harjutus.php;
 * autor: Rene Kasetalu
 * date: 29.01.2020;
 */

/**Aja loomine
Aja loomisel kasutab PHP kokkulepitud UNIX stiilis ajatemplit (timestamp). Tegemist on sekunditega, mida loetakse alates 01.01.1970 ning selle väljakutsumiseks kasutatakse time() funktsiooni.
**/
echo time(); //1361551056
echo '<hr>';

/**Kasutajasõbraliku kuupäeva kuvamine
Kui vajutada hetkel veebilehitsejas Refresh, siis aeg muutub pidevalt. Selle kuupäevaga on probleem selles, et inimene ei saa aru, millise kuupäevaga on siis tegemist. Siinkohal tuleb mängu date() funktsioon, mis vajab kahte argumenti: kuupäevavorming ja ajatemplit.
**/
echo date('d.m.Y G:i' , time());	//22.02.2013 16:02
echo '<hr>';

/**Ajavöönd
Kui ma nüüd võrdlen serverist saadetud kellaaega oma arvuti kellaajaga, siis on see kaks tundi maas. Selle parandamiseks on võimalus koodi lisada soovitud ajavöönd.
**/
date_default_timezone_set('Europe/Tallinn');	//22.02.2013 18:02


//kuude massiiv
$eesti_kuud = array(1 => 'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev . '.' . $kuu . ' ' . $aasta;    //22.veebruar2013
echo '<hr>';

$sp = mktime(0,0,0,10,29,1969);
echo date('d.m.Y', $sp);	//29.10.1969
echo '<hr>';

/**Tehted kuupäevadega
Üks võimalus ajaga arvutamiseks on time() ajatemplile lisada või eemaldada vastav arv sekundeid. Näiteks time()+60 puhul lisatakse juurde 60sek ehk 1min jne. Loodan, et põhikooli matemaatika tuleb meelde 🙂
**/
echo date('d.m.Y G:i' , time()+60);			//1min pärast
echo date('d.m.Y G:i' , time()+60*60);		//1h pärast
echo date('d.m.Y G:i' , time()+60*60*24);	//24h pärast
echo '<hr>';

/**Kui päevade, kuude ja aastateni jõuad, siis võib arvutamine natuke keerulisemaks osutada, seepärast võiks arvutusi teha mktime() funktsiooniga. Näiteks 27 aastat enne.
**/
$sp = mktime(0,0,0,10,29,1969-27);
echo date('d.m.Y', $sp);			//29.10.1942

/**Kuupäevadega arvutamisel on võimalik kasutada ka inglise keelseid lauseid, näiteks järgmised:
**/
  echo strtotime("now");
  echo strtotime("tomorrow");
  echo strtotime("yesterday");
  echo strtotime("10 September 2000");
  echo strtotime("+1 day");
  echo strtotime("+1 week");
  echo strtotime("+2 week 3 days 4 hours 5 seconds");
  echo strtotime("next Thursday");
  echo strtotime("last Monday");
  echo strtotime("5pm + 6 Hours");
  echo strtotime("now + 4 fortnights");
  echo strtotime("last Monday");
  echo strtotime("4pm yesterday");
  echo strtotime("6am 10 days ago");
  echo '<hr>';

/**Kuupäeva valideerimine
Nagu eelpool mainitud, on ajafunktsioone päris palju ja kõike ei jõua läbi vaadata. Viimase asjana tahaks siiski näidata funktsiooni, mis kontrollib, kas selline kuupäev eksisteerib. Kasuta seda näiteks kasutaja poolt sisestatud kuupäeva kontrollimiseks. Kui antud kuupäev on olemas, tuleb ‘Kuupäev korras!’ ja kui on mingi viga, nagu allpool, siis ‘Kuupäev on valesti sisestatud’.
**/
if(checkdate(12,32,2013)) {
	echo('Kuupäev korras!');
} else {
    echo('Kuupäev on valesti sisestatud');
}


