<html>
<head>
	<title>Editar produto</title>
</head>

<body>

<?php
// Include the database connection file
include_once 'db.php';

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
    $id = filter_input(INPUT_GET, 'id_produto', FILTER_VALIDATE_INT);
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

		// Insert data into database
		$result = $pdo->query("UPDATE produtos SET nome_produto = '$nome', descricao_produto = '$descricao', preco_produto = '$preco', quantidade_produto = '$quantidade' WHERE id_produto = '$id'");
		
		// Display success message
		echo "<p><font color='green'>Produto editado com sucesso!</p>";
		echo "<a href='index.php'>Ver produtos</a>";
	
}

?>

</body>
</html>