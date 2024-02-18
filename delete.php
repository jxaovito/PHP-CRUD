
<?php
// Include the database connection file
include_once 'db.php';

    $id = filter_input(INPUT_GET, 'id_produto', FILTER_VALIDATE_INT);

		$result = $pdo->query("DELETE FROM produtos WHERE id_produto = '$id'");

        header('Location: ./index.php');

?>
