<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>C&aacutelculo para Recebimento </title>
</head>


<body>

<form name='calcula_data' method='post' action='#'>

<b><font color="black"><font size="5">Inserir Data de Fabrica&ccedil&atildeo: <input type="text" name="data1" placeholder="Ex: 01/01/2018" /><br/>
<b><font color="black"><font size="5">Inserir Data de Vencimento: <input type="text" name="data2" placeholder="Ex: 01/12/2018" /><br/>
<input type="submit" value="CALCULAR"/><br/><br/><br/>

</form>

</body>
</html>

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

echo "DATA DE FABRICA&Ccedil&AtildeO = $data1 <br />";
echo "DATA DE VALIDADE = $data2 <br />";
echo "VIDA &UacuteTIL = $v0 DIAS<br />";
echo "RECEBER AT&Eacute $v1 DIAS AP&OacuteS DATA DE FABRICA&Ccedil&AtildeO!! <br />";
echo "RECEBER AT&Eacute $v2 !! <br />";

?>