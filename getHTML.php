<?php

$urls[] = array();
array_push($urls, 
'www.aglfechaduras.com.br',
'www.aeg-tec.com.br',
'www.soprasinos.com.br',
'www.DUTOTEC.COM.BR',
'www.miw.ind.br',
'www.planatc.com.br',
'www.steelvidea.com.br',
'www.tecmaf.com.br',
'www.cooperindustries.com',
'www.plasticosmb.com.br',
'www.argafacil.com.br',
'www.spiltag.ind.br',
'www.marcobi.com.br',
'www.megasteelmaquinas.com.br',

);

$categs[] = array();
#var_dump($urls);

$count = 0;
#$file = fopen("categoriasBD.txt", "r") or exit("Unable to open file!");

foreach ($urls as $url) {
	echo "$url\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	curl_close ($ch);
	$count += 1;
	var_dump($result);
}


exit;

?>