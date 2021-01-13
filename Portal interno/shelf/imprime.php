<?php


$codigo = $_POST['codigo'];

$result = `sed -n "/$codigo/p" arquivo.csv`;                    # pega a linha do arquivo que contenha a informação digitada
$cod = `sed -n "/$codigo/p" arquivo.csv | cut -d\; -f 2`;       # "-f 2" representa a coluna que contenha a descrição
$descr = `sed -n "/$codigo/p" arquivo.csv | cut -d\; -f 7`;    # "-f 7" representa a quarta coluna do arquivo csv separado por ponto e virguls

echo "$cod --- $descr";
?>
<html>
<form name='teste' method='POST' action="">
<input type="text" id='codigo' name='codigo'>
<input type='submit' value='ok'>
</form>
</html>