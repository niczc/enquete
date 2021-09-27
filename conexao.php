<?php

try {
    // conexao banco de dados 
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;", "root", "");
    //echo "Conectado com sucesso!";
} catch (PDOException $e) {
    // erro ao conectar com o banco 
    echo 'Falha ao conectar ao banco de dados: ' . $e->getMessage();

}