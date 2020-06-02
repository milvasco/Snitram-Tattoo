<?php
function valida_idade($data_registo){
	
$data_atual = date('Y-m-d');
//$data_registo = "1978-01-30";

$mes_data_atual = date("n",strtotime($data_atual));
$dia_data_atual = date("d",strtotime($data_atual));

$mes_data_registo = date("n",strtotime($data_registo));
$dia_data_registo = date("d",strtotime($data_registo));

$diff = abs(strtotime($data_registo) - strtotime($data_atual));

$anos = floor($diff / (365*60*60*24));
$meses = floor(($diff - $anos * 365*60*60*24) / (30*60*60*24));
$dia = floor(($diff - $anos * 365*60*60*24 - $meses*30*60*60*24)/ (60*60*24));

if ($anos < 18){
	echo $anos;
	return false;
}

else if ($anos >= 18 && $mes_data_registo >= $mes_data_atual && $dia_data_registo >= $dia_data_atual){

	return $anos;

}

else {
	$anos = $anos;
	return $anos;
}

}

function calcula_idade($data_registo){
	$data_atual = date('Y-m-d');
//$data_registo = "1978-01-30";

$mes_data_atual = date("n",strtotime($data_atual));
$dia_data_atual = date("d",strtotime($data_atual));

$mes_data_registo = date("n",strtotime($data_registo));
$dia_data_registo = date("d",strtotime($data_registo));

$diff = abs(strtotime($data_registo) - strtotime($data_atual));

$anos = floor($diff / (365*60*60*24));
$meses = floor(($diff - $anos * 365*60*60*24) / (30*60*60*24));
$dia = floor(($diff - $anos * 365*60*60*24 - $meses*30*60*60*24)/ (60*60*24));

if ($anos < 18){
	echo $anos;
	return $anos;
}	
return $dia;
}

?>