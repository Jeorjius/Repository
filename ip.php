<?
$externalContent = file_get_contents('http://checkip.dyndns.com/');
preg_match('/([\[\]:.[0-9a-fA-F]+)</', $externalContent, $m);
$externalIp = $m[1];
//echo $externalIp;
echo $externalContent;
echo "<hr>";
//phpinfo();
//Establecer la información de hora local en castellano de España
date_default_timezone_set("Europe/Madrid");
setlocale(LC_TIME,"es_ES");
echo strftime("Hoy es %A y son las %H:%M");
echo strftime("El año es %Y y el mes es %B");
			
//Establecer la información de moneda local en castellano de España
setlocale(LC_MONETARY, 'es_ES');
echo money_format("%n", "45");
phpinfo();
?>