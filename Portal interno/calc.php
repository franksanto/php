<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Portal Alagoinhas 192</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
	<link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<script>
    function somenteNumeros(num) {
        var er = /[^0-9.&&*&&-&&/]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
	
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
	</script>
	
</head>
<body>

<?php
require 'header.html';
?>

<div class="calcmain">
  <form name="calculator">
    <h1>Calculadora</h1><br>
    <p>CASIO</p>
	
    <input type="textfield" name="ans" value=""autofocus onkeyup="somenteNumeros(this);">
    <br>
    <input type="button" value="7" onClick="document.calculator.ans.value+='7'">
    <input type="button" value="8" onClick="document.calculator.ans.value+='8'">
    <input type="button" value="9" onClick="document.calculator.ans.value+='9'">
    <input type="button" value="/" onClick="document.calculator.ans.value+='/'"style="width:58px;">
    <br>
    <input type="button" value="4" onClick="document.calculator.ans.value+='4'">
    <input type="button" value="5" onClick="document.calculator.ans.value+='5'">
    <input type="button" value="6" onClick="document.calculator.ans.value+='6'">
	<input type="button" value="*" onClick="document.calculator.ans.value+='*'"style="width:58px;">
    <br>
    <input type="button" value="1" onClick="document.calculator.ans.value+='1'">
    <input type="button" value="2" onClick="document.calculator.ans.value+='2'">
    <input type="button" value="3" onClick="document.calculator.ans.value+='3'">
    <input type="button" value="-" onClick="document.calculator.ans.value+='-'"style="width:58px;">
    <br>
    <input type="button" value="0" onClick="document.calculator.ans.value+='0'">
	<input type="button" value="." onClick="document.calculator.ans.value+='.'"style="width:58px;">
    <input type="button" name="calculate" value="=" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)"/>	
	
	<input type="button" value="+" onClick="document.calculator.ans.value+='+'">
	<input type="button" value="Del" name="backspace" onClick="document.calculator.ans.value 															 =document.calculator.ans.value.substring(0,document.calculator.ans.value.length*1 -1)">
	<input type="reset" value="C">
   </form>
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
