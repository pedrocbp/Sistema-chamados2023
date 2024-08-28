<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de chamado</title>
</head>
<body>
    <center>
        <h1>CADASTRO DE CHAMADO</h1>
        <form method="POST" action="cadastrar_chamado.php">
            <table>
                <tr>
                    <td>RA: <input type="number" name="ra"></td>
                    <td>Nome: <input type="text" name="nome"></td>
                    <td>Descrição: <input type="text" name="descricao"></td>
                    <td>Sala: <input type="number" name="sala"></td>
                </tr>  
                <tr>
                <td>
                        Problema:
                        <select name="problema">
                            <?php
                                require("conecta.php");
                                $dados_select = mysqli_query($conn, "SELECT ID_PROBLEMA, NOME_PROBLEMA FROM problemas");
                                while($dado = mysqli_fetch_array($dados_select)) {
                                    echo '<option value='.$dado[0].'>'.$dado[1].'</option>';
                                }
                            ?>
                        </select>
                    </td>    
                </tr>
                <input type="hidden" name="status" value="NÃO RESOLVIDO">

            </table>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            <a href="index.html"><input type="button" value="Voltar"></a>

        </form>
    </center>
</body>
</html>