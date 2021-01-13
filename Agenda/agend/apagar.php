<?php
session_start();
//Conexao com BD
include_once("conexao.php");


//Apaga itens no BD
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_id = "DELETE FROM horarios WHERE id='$id'";
	$resultado_id = mysqli_query($conn, $result_id);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "";
		header("Location: listar.php");
	}else{
		
		$_SESSION['msg'] = "";
		header("Location: listar.php");
	}
}else{	
	$_SESSION['msg'] = "";
	header("Location: listar.php");
}
