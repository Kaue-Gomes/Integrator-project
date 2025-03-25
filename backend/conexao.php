<?php

$host = 'localhost'; 
$dbname = 'nome_do_banco';
$username = 'usuario'; 
$password = 'senha'; 

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_EMULATE_PREPARES   => false,    
    ];


    $pdo = new PDO($dsn, $username, $password, $options);


} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}


return $pdo;