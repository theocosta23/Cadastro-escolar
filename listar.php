<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "css/listar1.css">
    <title>Tabela dos alunos</title>
</head>
<body>
    <table border="1">
        <tr class="color">
            <td>RM</td>
            <td>Senha</td>
            <td>Email</td>
            <td>Foto</td>
            <td>Tipo</td>
        </tr>

        <?php

        include "conn.php";

        $dados = $conn->query("SELECT * FROM usuario");

        while ($linha = mysqli_fetch_array($dados)){
            $rm = $linha['rm'];
            $senha = $linha['senha'];
            $email = $linha['email'];  
            $avatar = $linha['avatar'];
            $tipo = $linha['tipo'];

            $codigo = <<<SCRIPT

            <tr>
            <td class = "color2">$rm</td>
            <td class = "color2">$senha</td>
            <td class = "color2">$email</td>
            <td class = "color2">$avatar</td>
            <td class = "color2">$tipo</td>
            </tr>

            SCRIPT;
            echo"$codigo";
        }
echo "</table>";
?>

</table>

<form action="listar2.php">
    <input type="submit" value="Ver Tabela de TIPO" />
</form>
</body>
</html>