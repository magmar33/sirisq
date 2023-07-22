<?php

$semana=date("D");

$semanaarray=array("Mon" =>"lunes", "Tue" => "martes", "Wed" => "miércoles", "Thu" => "jueves" , "Fri" => "viernes", "Sat" => "sábado", "Sun" => "domingo");

$diadelasemana=$semanaarray[$semana];

//$diadelasemana='miércoles';
//echo $diadelasemana.'<br>';

//echo sprintf('{{Plantilla:Frase-%s}}',$diadelasemana).'<br>';

$title=urlencode(sprintf('{{Plantilla:Frase-%s}}',$diadelasemana));


// echo $title.'<br>';

$url='http://es.wikiquote.org/w/api.php?action=parse&format=php&text='.$title;

$cadena=fopen($url,"r");
if($cadena){


	$array_x =  unserialize( stream_get_contents($cadena) );

//	print_r($array_x);

	$texto_html=$array_x["parse"]["text"]["*"];

	echo $texto_html;

	$texto = strip_tags( $texto_html , "<br>") ;

//	echo $texto .'<br>';

}

?>