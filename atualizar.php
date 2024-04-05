<?php 
include_once"config.php";
?>

<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$plano = $_POST['plano'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$observacoes = $_POST['observacoes'];

$sql = "UPDATE tbpacientes SET 
nome='$nome', cpf='$cpf', idade='$idade', 
plano='$plano', rua='$rua', numero='$numero', bairro='$bairro', 
cidade='$cidade', estado='$estado', telefone='$telefone', 
observacoes='$observacoes' WHERE id = '$id'";

if (mysqli_query($conn,$sql)){
    header("Location: editar.php?id=$id");
}else{ 
    echo "Erro" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>