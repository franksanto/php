<?php

$data1= $_POST['data1'];
$data2= $_POST['data2'];


$data1= explode("/", $data1);
$data1= "$data1[2]-$data1[1]-$data1[0]";

$data2= explode("/", $data2);
$data2= "$data2[2]-$data2[1]-$data2[0]";


$data1=strtotime("$data1");
$data2=strtotime("$data2");
$intervalo=($data2-$data1)/86400;


$calc = $intervalo * '33,3333333333333';
$calc = $calc / '100';
$calc = $calc + $data1;

echo "Total de dias = $intervalo <br />";
echo "Total calculado = $calc <br />";



?>
<html>
<div>
<form name='calcula_data' method='post' action='#'>
<input type='text' id='data1' name='data1' placeholder='Fabricacao'>
<input type='text' id='data2' name='data2' placeholder='Vencimento'>
<input type='submit' value='OK'>
</form>
</div>
</html>