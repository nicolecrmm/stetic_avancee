<?php
include ("config.php");
$nome=$_POST["nome"];
$email=$_POST["email"];
$senha=$_POST["senha"];

$res = $pdo->prepare("INSERT INTO cadastro(nome_completo, email, senha) VALUES(:nome,:email,:senha) ");

    $res->bindValue(":nome",$nome);
    $res->bindValue(":email",$email);
    $res->bindValue(":senha",$senha);
   
    $res->execute();
    
?>

<script>
   window.open("procedimento.html","_self");
</script>
   