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

    <form method="post" name="paciente" action="ainsttbc.php">
    <label>Nome Completo</label>
    <br>
    <input type="text" name="nome" maxlength="150" required>
    <br>
    <br>
    <label>CPF</label>
    <br>
    <input type="text" name="cpf" maxlength="11">
    <br>
    <br>
    <label>Idade</label>
    <br>
    <input type="text" name="idade" maxlength="3">
    <br>
    <br>
    <label>Plano</label>
    <br>
    <input type="text" name="plano" maxlength="25">
    <br>
    <br>
    <label>Rua</label>
    <br>
    <input type="text" name="rua" maxlength="200">
    <br>
    <br>
    <label>Numero</label>
    <br>
    <input type="text" name="numero" maxlength="5">
    <br>
    <br>
    <label>Bairro</label>
    <br>
    <input type="text" name="bairro" maxlength="50">
    <br>
    <br>
    <label>Cidade</label>
    <br>
    <input type="text" name="cidade" maxlength="50">
    <br>
    <br>
    <label>Estado</label>
    <br>
    <input type="text" name="estado" maxlength="20">
    <br>
    <br>
    <label>Telefone</label>
    <br>
    <input type="text" name="telefone" maxlength="15">
    <br>
    <br>
    <label>Observações</label>
    <br>
    <input type="text" name="observacoes" maxlength="500">
    <br>
    <br>
    <input type="submit" name="salvar" value="Salvar">

    </form>

    
</body>
</html>