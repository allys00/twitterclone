<?php

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = " insert into usuarios(usuario, email, senha) values ('$usuario', '$email', '$senha') ";

   //execultar a query

   if(mysqli_query($link, $sql)){

    echo 'Usuario cadastrado com sucesso!';

   }else {

    echo 'Erro ao cadastrar o usuario!';

   }

?>