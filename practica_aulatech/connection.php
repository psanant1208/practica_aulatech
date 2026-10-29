<?php
    require_once __DIR__ . '/config.php'

    // Crear una instancia de PDO para la conexión con SSL habilitado
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Manejo de errores
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo de recuperación
        PDO::ATTR_EMULATE_PREPARES => false, // Desactiva la emulación de sentencias preparadas
    ];

    // Conectar a la base de datos
    $connection = new PDO($dsn, $user, $pass, $options);
    // echo "Conexión exitosa a la base de datos.";