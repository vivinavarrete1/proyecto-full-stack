<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'AGENCIA';

try{
    $conn = new PDO("mysql:host=$host;dbname$dbname", $username, $password);
    $conn->setAttribute(PDO::ATR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conecado a la base de datos de AGENCIA";
} catch (PDOException $e){
    echo "Error al conectar: " . $e->getMessage();
}
