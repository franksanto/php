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

<div class="calcmain2">
	<div class="reservar">
		<p>AVISO DIA E HORÁRIO - SALA DE TREINAMENTO</p>
    </div>
	<div class="reservaarea">
		<div class="reserva2">
			<p><h1>Preencha o Formulário</h1></p><br>

			<form action="/action_page.php">

			<label for="cars">Nome:</label><br>
			<input type="text" name="nome"><br><br>
			
			<label for="cars">Data:</label> <br>
			<input type="date" value="data"><br><br>
			
			<label for="cars">Hora:</label><br>
			<input type="time" value="hora"><br><br>
			
			<label for="cars">Equipamentos Necessários:</label><br>
			<div class="opcoes">
				<div class="opcoes1">
					<input type="checkbox" id="equip1" name="equip1" value="Polycon">
					<label for="vehicle1"> Polycon </label><br> 
					<input type="checkbox" id="equip2" name="equip2" value="Webcam">
					<label for="vehicle1"> Webcam </label><br>
				</div>
				<div class="opcoes2">
					<input type="checkbox" id="equip3" name="equip3" value="Caixa de Som">
					<label for="vehicle2"> Caixa de Som </label> <br>
					<input type="checkbox" id="equip4" name="equip4" value="Projetor">
					<label for="vehicle1"> Projetor </label><br><br>
				</div>
			</div>
			<label for="cars">Obs:</label><br>
			<textarea id="observação" name="observação" rows="5" cols="44"></textarea>
			
			<input type="submit" value="Submit">

			</form>
		</div>
		<div class="reserva3">
			<p><h1>Agendamentos</h1></p>
		</div>
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

<!--

//Desabilita o post com enter  
$(document).ready(function() {
            $('input').keypress(function(e) {
                var code = null;
                code = (e.keyCode ? e.keyCode : e.which);
                return (code == 13) ? false : true;
            });
        });

//Clica no botão de igual
  $(document).ready(function() {
        $('input').keypress(function(e) {
            if (e.keyCode == 13) {
                $('input[name="calculate"]').trigger('click');
                
            }
            return;
        });
    });

	
<form name="myform">
    <table width="210" cellspacing="2" cellpadding="2">
        <tr>
            <td align="center">
                <table width="173" border="0" cellspacing="1" cellpadding="1" height="130">
                    <tr>                             </tr>
                    <tr>
                        <td colspan="3">                  <input type="text" name="display" size="20" class="form-control" />               </td>
                        <td width="53" height="0">
                            <font color="#FFFFFF">
                                <input type="button" name="clear" value="   C   " class="btn btn-danger"
                                       onclick="myform.display.value=''" onmouseover="window.status='Limpar'" onmouseout="window.status=''" />
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td width="53" height="0">
                            <input type="button" name="seven" value="   7   " class="btn btn-default"
                                   onclick="myform.display.value+='7'" />
                        </td>
                        <td width="53" height="0">
                            <input type="button" name="eight" value="   8   " class="btn btn-default"
                                   onclick="myform.display.value+='8'" />
                        </td>
                        <td width="53" height="0">
                            <input type="button" name="nine" value="   9   " class="btn btn-default"
                                   onclick="myform.display.value+='9'" />
                        </td>
                        <td width="53" height="0">
                            <font color="#FFFFFF">
                                <input type="button" name="divide" value="÷" class="btn btn-default"
                                       onclick="myform.display.value+='/'" />
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td width="53" height="0">
                            <input type="button" name="four" value="   4   " class="btn btn-default"
                                   onclick="myform.display.value+='4'" />
                        </td>
                        <td width="53" height="0">
                            <input type="button" name="five" value="   5   " class="btn btn-default"
                                   onclick="myform.display.value+='5'" />
                        </td>
                        <td width="53" height="0">
                            <input type="button" name="six" value="   6   " class="btn btn-default"
                                   onclick="myform.display.value+='6'" />
                        </td>
                        <td width="53" height="0">
                            <font color="#FFFFFF">
                                <input type="button" name="times" value="X" class="btn btn-default"
                                       onclick="myform.display.value+='*'" />
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td width="53" height="0">
                            <input type="button" name="one" value="   1   " class="btn btn-default"
                                   onclick="myform.display.value +='1'" />
                        </td>
                        <td width="53" height="0">
                            <input type="button" name="two" value="   2   " class="btn btn-default"
                                   onclick="myform.display.value +='2'" />
                        </td>
                        <td width="54" height="0">
                            <input type="button" name="three" value="   3   " class="btn btn-default"
                                   onclick="myform.display.value +='3'" />
                        </td>
                        <td width="72" height="0">
                            <font color="#FFFFFF">
                                <input type="button" name="minus" value="–" class="btn btn-default"
                                       onclick="myform.display.value+='-'" />
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td width="53" height="0">
                            <input type="button" name="zero" value="   0   " class="btn btn-default"
                                   onclick="myform.display.value+='0'" />
                        </td>
                        <td width="53" height="0"> </td>
                        <td width="54" height="0">
                            <input type="button" name="plus" value="   +   " class="btn btn-default"
                                   onclick="myform.display.value +='+'" />
                        </td>
                        <td width="72" height="0">
                            <font color="#FFFFFF">
                                <input type="button" name="calculate" value="   =   " class="btn btn-default"
                                       onclick="myform.display.value=eval(myform.display.value)" />
                            </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
