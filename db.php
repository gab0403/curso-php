<?php
$db_name = "moviestar";
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = 1234;


try {

    $conn = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    $error = $e->getMessage();
    echo "Erro: $error";
}

?>