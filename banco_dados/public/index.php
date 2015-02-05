<?php
require '../conn.php';

$conn = mysqli_connect(HOST, USER, PASS, BASE);

/* Cadastrar na tabela contato dados vindo do form pelo método POST*/
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO contato (nome, telefone) VALUES ('$nome',$telefone)";

mysqli_query($conn,$sql);
echo mysqli_affected_rows($conn) . ' registros afetados' . '<br><hr>';


/* Listar dados da tabela contato */
$sql1 = "SELECT * FROM contato";
$itens = mysqli_query($conn,$sql1);

while ($linha = mysqli_fetch_assoc($itens)) {
	echo $linha['nome'] . ' - ' . $linha['telefone'] . '<br>';
}

echo mysqli_num_rows($itens) . ' registros selecionados';

mysql_close($conn);
