<html>
<head>
	<title>Atualizar produto</title>
</head>

<body>
	<h2>Atualizar produto</h2>
	<p>
		<a href="index.php">Início</a>
	</p>

	<form action="updateProducts.php" method="post" name="add">
		<table width="25%">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr> 
				<td>Descrição</td>
				<td><input type="text" name="descricao"></td>
			</tr>
			<tr> 
				<td>Preço</td>
				<td><input type="text" name="preco"></td>
			</tr>
            <tr> 
				<td>Quantidade</td>
				<td><input type="text" name="quantidade"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>