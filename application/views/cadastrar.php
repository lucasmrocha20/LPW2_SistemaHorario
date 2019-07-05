<?php
session_start();
include("config.php");

$nome = msqli_real_escape_string($config, trim($_POST['nome']));
$matricula = msqli_real_escape_string($config, trim($_POST['matricula']));
$senha = msqli_real_escape_string($config, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuarios where usuarios = '$usuario'";
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
  $_SESSION['usuario_existe'] = true;
  header['Location: index.php'];
  exit;
}

$sql = "INSERT INTO usuarios (nome, matricula, senha) VALUES ('$nome', '$matricula', '$senha', NOW())";

if(config->query($sql) === TRUE){
  $_SESSION['status_cadastro'] = TRUE;
}

$config->close();

header('Location: cadastro.php');
exit;
?>	