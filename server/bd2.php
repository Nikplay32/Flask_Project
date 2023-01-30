<?php
    define('USER', 'admin2');
    define('PASSWORD', 'abobus2004-7');
    define('HOST', 'localhost');
    define('DATABASE', 'users');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>