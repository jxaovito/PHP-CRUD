<html>
<head>
	<title>Add Data</title>
</head>

<body>

<?php
// Include the database connection file
include_once 'db.php';

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

		if (empty($nome) || empty($descricao) || empty($preco) || empty($quantidade)) {

		echo "<br/><a href='javascript:self.history.back();'>Preencha todos os campos</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = $pdo->query("INSERT INTO produtos (`nome_produto`, `descricao_produto`, `preco_produto`, `quantidade_produto`) VALUES ('$nome', '$descricao', '$preco', '$quantidade')");
		
		// Display success message
		echo "<p><font color='green'>Produto adicionado com sucesso!</p>";
		echo "<a href='index.php'>Ver produtos</a>";
	}
}
?>
</body>
</html>