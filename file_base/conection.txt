<?php 
define("SERVERNAME","localhost:3309");
define("DATABASE","");

// PDO - Consegue se conectar a qualquer banco de dados.
    // $dsn = "mysql:dbname=".DATABASE.";host=".DATABASE.";charset=utf8";
    $dsn = "mysql:dbname=migracao;host=localhost:3307"; //nome do banco dos dados. tipo, nome, ip=127.0.0.1
    $dbuser = "root";
    $dbpass = "root";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        // echo "Conexão estabelecida com sucesso!";
    } catch(Exception $e) {
        echo "A conexão com o banco de dados falhou: ".$e->getMessage();
    }
?>