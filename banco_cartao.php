<?php
include ("config.php");
session_start();
$numero_cartao = $_POST["numero_cartao"];
$data_validade = $_POST["data_validade"];
$cvv = $_POST["cvv"];;
$nome_usuario_cartao =  $_POST["nome_usuario_cartao"]; 
$id_cliente = $_SESSION["id_cliente"];


$comando = $pdo->prepare("INSERT INTO pagamento   (numero_cartao, data_validade, cvv, nome_usuario_cartao, id_cliente) VALUES(:numero_cartao,:data_validade,:cvv, :nome_usuario_cartao, :id_cliente) ");

    $comando->bindValue(":numero_cartao",$numero_cartao);
    $comando->bindValue(":data_validade",$data_validade);
    $comando->bindValue(":cvv",$cvv);
    $comando->bindValue(":nome_usuario_cartao",$nome_usuario_cartao);
    $comando->bindValue(":id_cliente",$id_cliente);
    
    $comando->execute();
    header("location:pag_feito.html");
?>
