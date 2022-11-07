<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="10">
        <tr>
            <td>ID</td>
            <td>Tipo</td>
        </tr>

        <?php

        include "conn.php";

        $dados = $conn->query("SELECT * FROM usuario");

        while ($linha = mysqli_fetch_array($dados)) {
            $id = $linha['id_usuario'];
            $tipo = $linha['tipo'];

            $codigo = <<<SCRIPT

            <tr>
            <td>$id</td>
            <td>$tipo</td>
            </tr>

            SCRIPT;
            echo"$codigo";
        }
    echo"</table>";
    
?>
</body>
</html>