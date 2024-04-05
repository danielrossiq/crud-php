<?php 
include_once"config.php";
?>

<?php
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

$sql = "INSERT INTO tbpacientes(nome, cpf, idade, plano, rua, numero, bairro, cidade, estado, telefone, observacoes)
VALUES('$nome', '$cpf', '$idade', '$plano', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$telefone', '$observacoes')";

if (mysqli_query($conn,$sql)){
    header("Location: addtbc.php");
}else{
    echo "Erro" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>