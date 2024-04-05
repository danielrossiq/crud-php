<?php include_once "config.php"; ?>

<?php
$id = $_GET['id'];
$conn = mysqli_connect($servidor, $dbuser, $dbpassword, $dbname);
mysqli_set_charset($conn, "utf8");
$result_nomes = "SELECT * FROM tbpacientes WHERE id='$id' LIMIT 1";
$resultado_nomes = mysqli_query($conn, $result_nomes);

while($linha = mysqli_fetch_array($resultado_nomes)){
    $id = $linha['id'];
    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $idade = $linha['idade'];
    $plano = $linha['plano'];
    $rua = $linha['rua'];
    $numero = $linha['numero'];
    $bairro = $linha['bairro'];
    $cidade = $linha['cidade'];
    $estado = $linha['estado'];
    $telefone = $linha['telefone'];
    $observacoes = $linha['observacoes'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pacientes</title>
</head>
<body>
    <form method="get" name="formbusca" action="busca.php">
    <label>Pesquisa</label>
    <br>
    <input type="text" name="busca" required>
    <br>
    <input type="submit" name="" value="Ok">
    <br>
    <br>
    <br>
    </form>

    <form method="post" name="paciente" action="atualizar.php">
    <label>Nome Completo</label>
    <br>
    <input type="text" name="nome" maxlength="150" value="<?php echo $nome;?>">
    <input type="hidden" name="id" maxlength="150" value="<?php echo $id;?>">
    <br>
    <br>
    <label>CPF</label>
    <br>
    <input type="text" name="cpf" maxlength="11" value="<?php echo $cpf;?>">
    <br>
    <br>
    <label>Idade</label>
    <br>
    <input type="text" name="idade" maxlength="3" value="<?php echo $idade;?>">
    <br>
    <br>
    <label>Plano</label>
    <br>
    <input type="text" name="plano" maxlength="25" value="<?php echo $plano;?>">
    <br>
    <br>
    <label>Rua</label>
    <br>
    <input type="text" name="rua" maxlength="200" value="<?php echo $rua;?>">
    <br>
    <br>
    <label>Numero</label>
    <br>
    <input type="text" name="numero" maxlength="5" value="<?php echo $numero;?>"> 
    <br>
    <br>
    <label>Bairro</label>
    <br>
    <input type="text" name="bairro" maxlength="50" value="<?php echo $bairro;?>">
    <br>
    <br>
    <label>Cidade</label>
    <br>
    <input type="text" name="cidade" maxlength="50" value="<?php echo $cidade;?>">
    <br>
    <br>
    <label>Estado</label>
    <br>
    <input type="text" name="estado" maxlength="20" value="<?php echo $estado;?>">
    <br>
    <br>
    <label>Telefone</label>
    <br>
    <input type="text" name="telefone" maxlength="15" value="<?php echo $telefone;?>">
    <br>
    <br>
    <label>Observações</label>
    <br>
    <input type="text" name="observacoes" maxlength="500" value="<?php echo $observacoes;?>">
    <br>
    <br>
    <input type="submit" name="salvar" value="Salvar">

    </form>

    
</body>
</html>