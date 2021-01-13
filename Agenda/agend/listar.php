<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Listar</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	</head>
	<body 
	style="margin:0; 
	margin:45px 0px 30px 110px;
    background-color:#F5F5F5;">

    <div class="secaoimg">
		<div class="titulo0">
			<div class="titulo">REGRAS CADASTRADAS</div>
		</div>

<?php 
	session_start();
	//Conexão com banco de dados
	include_once("conexao.php");
?>
	
	<div class="background">
		<div class="hoje">
		<?php
			echo "<h1>Horários de funcionamento para o dia de hoje</h1>";
			
			$result_horarios = "SELECT * FROM horarios WHERE DAY(data) = DAY(CURDATE()) AND MONTH(data) = MONTH(CURDATE()) AND YEAR(data) = YEAR(CURDATE())";
			$resultado_horarios = mysqli_query($conn, $result_horarios);
			while($row_horarios = mysqli_fetch_array($resultado_horarios)){
				echo "- Horário: ".date('d/m/Y H:i:s', strtotime($row_horarios['data']))."<hr>";
			}
		?>
		</div>
		<div class="mes">
		<?php	
			echo "<h1>Horários de funcionamento em dias do mês</h1>";
			
			$result_horarios = "SELECT * FROM horarios WHERE MONTH(data) = MONTH(CURDATE()) AND YEAR(data) = YEAR(CURDATE())";
			$resultado_horarios = mysqli_query($conn, $result_horarios);
			while($row_horarios = mysqli_fetch_array($resultado_horarios)){
				echo "- Horário: ".date('d/m/Y H:i:s', strtotime($row_horarios['data']))."<hr>";
			}
		?>
		</div>
		<div class="apagar">
	    <?php
	    	echo "<h1>Apagar Dia(s) do Banco de Dados</h1>";

	    	//Receber o número da página
			$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
			$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
			
			//Setar a quantidade de itens por pagina
			$qnt_result_pg = 6;
			
			//calcular o inicio visualização
			$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
			
			$result_id = "SELECT * FROM horarios LIMIT $inicio, $qnt_result_pg";
			$resultado_id = mysqli_query($conn, $result_id);
			while($row_id = mysqli_fetch_assoc($resultado_id)){
				echo "- Data: ".date('d/m/Y H:i:s', strtotime($row_id['data']))."<br>";
				echo "<a href='apagar.php?id=" . $row_id['id'] . "'><br><div class='alert alert-danger'>Apagar</div></a><br><hr>";
			}
		?>
		</div>
		<div class="voltar2">
	        <a href="index.php">
	            <div>
	                </br></br><img src="images/voltar.png"/>
	            </div>
	        </a>
	    </div>
	</div>
	</body>
</html>