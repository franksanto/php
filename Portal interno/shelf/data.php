<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ATENÇÃO</title>
</head>
 
<body>

<?php

$data1= $_POST['data1'];
$data2= $_POST['data2'];


$d1= explode("/", $data1);
$d1= "$d1[2]-$d1[1]-$d1[0]";

$d2= explode("/", $data2);
$d2= "$d2[2]-$d2[1]-$d2[0]";


$d3=strtotime("$d1");
$d4=strtotime("$d2");
$intervalo=($d4-$d3)/86400;


$calc = $intervalo * '33,3333333333333';
$calc = $calc / '100';
$calc = $calc;

$v0=round($intervalo, 0);
$v1=round($calc, 0);
$v2=date('d/m/Y', strtotime($d1.  "+$v1 days"));

echo "VIDA UTIL = $v0 <br />";
echo "RECEBER ATE $v1 DIAS APOS DATA DE FABRICACAO!! <br />";
echo "RECEBER ATE $v2 !! <br />";

?>
 
</body>
 
</html>
