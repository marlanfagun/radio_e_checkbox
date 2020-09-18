<?php

$host = 'localhost:3306';
$username = 'root';
$password = '';
$db_name = 'dev_checkbox';

$conecta = mysqli_connect($host, $username, $password, $db_name);

if(mysqli_connect_error()) {
  echo "Erro na conexão: ".mysqli_connect_error();
}
