<?php

function connection(): PDO {
    $host='localhost';
    $database = 'db';
    $user = 'root';
    $password = 'password';

    try {
        $dsn = "mysql:host=$host;port=5432;databasNname=$$database;";
        return new PDO(
            $dsn,
            $user,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $exception) {
        die($exception->getMessage());
    } finally {
        echo 'success';
    }
}

return connection();

?>