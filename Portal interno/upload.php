<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Portal Alagoinhas 192</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
	<link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>

<?php
require 'header.html';
?>

<div class="enviaarq">
    <p>ENVIAR ARQUIVOS</p>
    <img src="assets/images/enviar.png" />
</div>

<div class="atotal">
    <div class="uploadarea">
        <div class="centerup">
		
            <form method="POST" enctype="multipart/form-data">
			
                <img src="assets/images/upload.png" />
                <input type="file" name="arquivo" />
                <input type="submit" value="Enviar" />
            </form>
			
        </div>
<?php
		$dir = "arquivos/"; 
		// recebendo o arquivo multipart 
		$file = $_FILES["arquivo"]; 
		// Move o arquivo da pasta temporaria de upload para a pasta de destino 
		if (move_uploaded_file($file["tmp_name"], "$dir/".$file["name"])) { 
			echo "<br><strong>Arquivo enviado com sucesso!</strong>";
			/*echo "<script type='javascript'>alert('Arquivo enviado com Sucesso!');";
			echo "javascript:window.location='upload.php';</script>";*/
		}
?>
    </div> 
</div>   

<footer>
    <div class="footer--area">

        <div class="footer--item area1">
            <div class="footer-social">
                                        <a href="https://www.facebook.com/Atacadaosa.Oficial" target="_blank">
                                            <img src="assets/images/1.png" />
                                        </a>
                                        <a href="https://www.instagram.com/atacadaosa.oficial/?hl=pt-br" target="_blank">
                                            <img src="assets/images/2.png" />
                                        </a>
                                        <a href="https://twitter.com/atacadao_sa" target="_blank">
                                            <img src="assets/images/3.png" />
                                        </a>
                                        <a href="https://www.linkedin.com/mwlite/company/atacadao" target="_blank">
                                            <img src="assets/images/4.png" />
                                        </a>
                                        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank">
                                            <img src="assets/images/5.png" />
                                        </a>
            </div>
            <div class="area">
                <div class="button2">
                    <a href="https://play.google.com/store/apps/details?id=br.com.crosoften.meuatacadao&hl=pt_BR">
                    <div class="playstore">
                        <img src="assets/images/playstore.png" />                
                    </div>
                    </a>
                    <p>Baixe Nosso Aplicativo!</p>
                </div>
            </div>
        </div>

        <div class="footer--item area2">
            <div class="area">
                <p>Copyright © 2020 Atacadão SA</p>
                <p>Filial 192 - Alagoinhas</p>
                <p>CNPJ: 75315333/0192-09 </p>
                <p>Rodovia BR 110, KM 300, Próximo a UNEB</p>
            </div>
        </div>

        <div class="footer--item area3">
            <div class="desenvol">
                <p>Desenvolvido por:</p> 
                <p>Franclin Santos</p>
                <img src="assets/images/cpd192.jpg" />
            </div>
        </div>
    </div>
</footer>
</body>
</html>