<center>
<?php
    date_default_timezone_set("America/Sao_Paulo");

    
    require("conecta.php");

    $id_chamado = $_GET['id_chamado'];
    $time = date('H:i:s');

    $sql = "UPDATE cadastro_chamado 
    SET STATUS = 'RESOLVIDO' 
    WHERE ID_CHAMADO = $id_chamado";

    if ($conn->query($sql) === TRUE) 
    {
        echo "<h1>CHAMADO RESOLVIDO</h1>";
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
      }

    $sql= 
    "UPDATE cadastro_chamado 
            SET horario_resolvido = '$time'
            WHERE ID_CHAMADO = $id_chamado";

    $conn->query($sql);


    $conn->close();
?>
    <a href="index.html"><input type="button" value="Voltar"></a>


</center>