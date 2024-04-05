<?php include_once "config.php"
?>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM tbpacientes WHERE id='$id'";

if(mysqli_query($conn, $sql, )) {
    header("Location: addtbc.php");
}else{
    echo 'Erro';
}
?>