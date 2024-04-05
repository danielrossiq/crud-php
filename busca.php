<?php include_once "config.php"; ?>
<?php 
$busca = $_GET['busca'];

$result_busca = "SELECT * FROM tbpacientes WHERE nome like '%$busca%' "; 
$resultado = mysqli_query($conn, $result_busca);

while ($linha = mysqli_fetch_array($resultado)){
    echo $nome = $linha['nome'];
    echo '<a href=deletar.php?id='.$linha['id'].'>Deletar</a> | <a href=editar.php?id='.$linha['id'].'>Editar</a>';
    echo '<br>';

}
?>