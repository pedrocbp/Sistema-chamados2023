<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Técnico</title>
</head>
<body>
    <center>
        <h1>CONSULTA RA</h1>

        <form method="GET" action="consulta_ra.php">
            <label for="ra">RA:</label>
            <input type="text" name="ra">
            <input type="submit" value="Consultar RA">
        </form>

        <?php
        if (isset($_GET['ra'])) {
            require("conecta.php");

            $pesquisa_ra = $_GET['ra'];
            $sql = "SELECT RA, PROBLEMA, SALA, DESCRICAO, HORARIO, STATUS,
                    CASE 
                        WHEN STATUS = 'RESOLVIDO' THEN 'RESOLVIDO' 
                        ELSE 'NÃO RESOLVIDO' 
                    END RESOLVIDO 
                    FROM cadastro_chamado 
                    WHERE RA = $pesquisa_ra";

            $conecta = $conn->query($sql);

            if ($conecta->num_rows > 0) {
                echo '<table border="4">';
                echo '<tr>';
                echo '<td>RA</td>';
                echo '<td>PROBLEMA</td>';
                echo '<td>SALA</td>';
                echo '<td>DESCRIÇÃO</td>';;
                echo '<td>HORÁRIO CHAMADO</td>';
                echo '<td>SITUAÇÃO</td>';
                echo '</tr>';
                while ($dado = $conecta->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $dado['RA'] . '</td>';
                    echo '<td>' . $dado['PROBLEMA'] . '</td>';
                    echo '<td>' . $dado['SALA'] . '</td>';
                    echo '<td>' . $dado['DESCRICAO'] . '</td>';
                    echo '<td>' . $dado['HORARIO'] . '</td>';
                    echo '<td>' . $dado['RESOLVIDO'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '<p>CHAMADO NÃO ENCONTRADO</p>';
            }

            $conn->close();
        }
        ?>  

        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>
</html>
