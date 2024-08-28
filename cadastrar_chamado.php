<?php
    date_default_timezone_set("America/Sao_Paulo");


    require("conecta.php");

    $ra = $_POST['ra'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $sala = $_POST['sala'];
    $problema = $_POST['problema'];
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $status = $_POST['status'];


    $sql = "INSERT INTO cadastro_chamado (ra, nome, descricao, sala, problema, data_chamado, horario, status)
    VALUES ('$ra', '$nome', '$descricao', '$sala', '$problema', '$date', '$time', '$status')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>CHAMADO CADASTRADO COM SUCESSO</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

?>