<?php
require_once 'conexao.php';

// if (isset($_POST['btnSalvar'])) {
//   $check = $_POST['check'];
//   foreach ($check as $nome => $valor) {

//     $sql = "insert into tabelaA (nome) values ('$valor')";

//     if (mysqli_query($conecta, $sql)) {
//       echo "Salvo com sucesso!";
//     } else {
//       echo "Erro ao salvar";
//     }
//   }
// };

if (isset($_POST['btnSalvar'])) {
  $radio = $_POST['radio'];
  

    $sql = "insert into tabelaA (nome) values ('$radio')";

    if (mysqli_query($conecta, $sql)) {
      echo "Salvo com sucesso!";      
    } else {
      echo "Erro ao salvar";
    }
};
