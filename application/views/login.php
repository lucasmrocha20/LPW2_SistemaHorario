<?php
session_start();
include('config.php');

if(empty($_POST['matricula']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$matricula = mysqli_real_escape_string($config, $_POST['matricula']);
$senha = mysqli_real_escape_string($config, $_POST['senha']);

$query = "select matricula from usuarios where usuario = '{$matricula}' and senha = md5('{$senha}')";

$result = mysqli_query($config, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuarios_bd = mysqli_fetch_assoc($result);
	$_SESSION['matricula'] = $usuarios_bd['matricula'];
	header('Location: horario.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}