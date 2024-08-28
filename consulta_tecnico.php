<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Técnico</title>
</head>
<body>
    <center>
        <h1>CONSULTA DO TÉCNICO</h1>
        

        <table border="4">
        <tr>
                <td>ID</td>
                <td>RA</td>
                <td>NOME</td>
                <td>DESCRIÇÃO</td>
                <td>SALA</td>
                <td>PROBLEMA</td>
                <td>STATUS</td>
                <td>DATA CHAMADO</td>
                <td>HORÁRIO</td>
                <td>PROBLEMA</td>
                <td>RESOLVER</td>


            </tr>
            <tbody>
                <?php
                require("conecta.php");

                

    
                $dados = mysqli_query($conn, "SELECT ID_CHAMADO, 
                                                    RA,
                                                    NOME, 
                                                    DESCRICAO, 
                                                    SALA, 
                                                    PROBLEMA, 
                                                    STATUS, 
                                                    DATA_CHAMADO, 
                                                    HORARIO,
                                                    problemas.NOME_PROBLEMA
                                                    FROM cadastro_chamado
                                                    INNER JOIN problemas
                                                    ON problemas.ID_PROBLEMA = cadastro_chamado.PROBLEMA
                                                    WHERE STATUS = 'NÃO RESOLVIDO'");
                                                             
                                                    
                    while($dado = mysqli_fetch_array($dados)) {
                        echo '<tr>';
                        echo '<td>'.$dado[0].'</td>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '<td>'.$dado[3].'</td>';
                        echo '<td>'.$dado[4].'</td>';
                        echo '<td>'.$dado[5].'</td>';
                        echo '<td>'.$dado[6].'</td>';
                        echo '<td>'.$dado[7].'</td>';
                        echo '<td>'.$dado[8].'</td>';
                        echo '<td>'.$dado[9].'</td>';
                        echo '<td><a href="resolver_chamado.php?id_chamado='.$dado[0].'"><button>RESOLVER</button></a></td>';

                        echo '</tr>';
                    }

                    
                ?>
                <table> 

    <a href="index.html"><input type="button" value="Voltar"></a>

    </center>
    
</body>
</html>
