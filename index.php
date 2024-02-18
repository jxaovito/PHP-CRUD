<?php
    include_once 'db.php';

    $data = $pdo->query('SELECT * FROM produtos ORDER BY id_produto');

    $results = $data->fetchAll(PDO::FETCH_ASSOC);
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table width='80%'>
		<tr>
			<td><strong>Código</strong></td>
			<td><strong>Nome</strong></td>
			<td><strong>Descrição</strong></td>
			<td><strong>Preço</strong></td>
            <td><strong>Quantidade</strong></td>
		</tr> 
		<?php
		// Fetch the next row of a result set as an associative array
        foreach($results as $row)
        {
            echo '<tr>';
                  echo '<th scope="row">'. $row['id_produto'] . '</th>';
            echo '<td>'. $row['nome_produto'] . '</td>';
            echo '<td>'. $row['descricao_produto'] . '</td>';
            echo '<td>'. $row['preco_produto'] . '</td>';
            echo '<td>'. $row['quantidade_produto'] . '</td>';
            echo '<td width=250>';
            echo '<a class="btn btn-warning" href="update.php?id_produto='.$row['id_produto'].'">Atualizar</a>';
            echo ' ';
            echo '<a class="btn btn-danger" href="delete.php?id_produto='.$row['id_produto'].'">Excluir</a>';
            echo '</td>';
            echo '</tr>';
        }
		?>

	</table>
    <button><a href="./add.php">Adicionar produto</a></button>

</body>
</html>