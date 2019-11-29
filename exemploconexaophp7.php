<?php
$host = "IP DO HOST(SE FOR DO MESMO SERVIDOR PONHA COMO LOCALHOST)";
$usuario = "NOME DO USUARIO ROOT";
$senha = "";
$bd = "NOME DO BANCO DE DADOS";
$mysqli = new mysqli($host, $usuario, $senha, $bd);
if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
?>
