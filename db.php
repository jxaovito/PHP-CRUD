<?php
$user = 'ecom';
$pass = 123;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=ecommerce;port=3307', $user, $pass);
} catch (PDOException $e) {
    echo 'error';
}


?>