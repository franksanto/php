<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cálculo para Recebimento </title>
</head>

<?php
echo "
    <script type=\"text/javascript\">
    alert(\"PRODUTOS RECEBIDOS APÓS A DATA PERMITIDA, DEVE CONTER O CARIMBO E ASSINATURA DO GERENTE COMERCIAL NA FAM.\")	
    </script>";
?>
 
<body>
 
<form action="data.php" method="post">
 
<b><font color="black"><font size="5">Inserir Data de Fabricação: <input type="text" name="data1" placeholder='Ex: 01/01/2018' /><br/>
<b><font color="black"><font size="5">Inserir Data de Vencimento: <input type="text" name="data2" placeholder='Ex: 01/12/2018' /><br/>
<input type="submit" value="Calcular"/>
 
</form>
 
</body>
</html>