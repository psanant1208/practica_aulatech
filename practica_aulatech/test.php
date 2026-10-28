<?php
try {
require_once __DIR__ . '/connection.php';
echo 'Conexión realizada correctamente.';
} catch (PDOException $exception) {
echo $exception->getMessage();
}