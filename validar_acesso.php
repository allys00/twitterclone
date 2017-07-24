<?php

    session_start();

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$sql = " SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['usuario'])){

            $_SESSION['usuario'] = $dados_usuario['usuario'];
            $_SESSION['email'] = $dados_usuario['email'];

            header ('location: home.php');
        }else{
            header('location: index.php?erro=1');
        }

    }else{
        echo 'Erro na Execução da consulta, favor entrar em contato com o admin do site';

    }

    

?>