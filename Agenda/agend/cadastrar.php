<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro</title>
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
			<div class="titulo">SISTEMA DE AGENDAMENTOS</div>
		</div>
		<div class="container">
			<h1>Cadastrar Data</h1></br></br></br>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
			<form class="form-horizontal" action="processa.php" method="POST">
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Dia</label>
					<div class="col-xs-4">
						<div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii">
							<input type="text" class="form-control" name="data" placeholder="Escolha o Data, Hora e Minuto">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</span>
						</div> 
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Cadastrar Regra</button>
					</div>
				</div>
			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<script src="js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
		<script type="text/javascript">
			$('.data_formato').datetimepicker({
				weekStart: 1,
				todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1,
                language: "pt-BR",
                startDate: '+0d'
			});
		</script>
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