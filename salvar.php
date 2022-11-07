<?php

include "conn.php";


$rm = $_POST["rm"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$pasta = "img/";
$avatar = $_FILES["avatar"]["name"];
$tipo = $_POST["usuario"];

$separa = explode(".", $avatar);
$separa = array_reverse($separa);
$tipo_avatar = $separa[0];
$avatar_final = $rm . '.' . $tipo_avatar;



    
    
$testar = $conn->query("SELECT * FROM usuario WHERE rm = '$rm' ");
$check = mysqli_num_rows ($testar);
     
if($check == 1){
echo"RM já cadastrado";
header("Refresh: 3;url=form.html");
     }
     else{
     $conn ->query("INSERT INTO usuario (rm, senha, email, avatar, tipo) VALUES ('$rm', '$senha', '$email', '$avatar_final', '$tipo')");
     
     move_uploaded_file($_FILES['avatar']['tmp_name'], $pasta . $avatar_final);
     
     echo "DADOS SALVOS";

     header("Refresh: 3;url=listar.php");
     
     }


?>
    



