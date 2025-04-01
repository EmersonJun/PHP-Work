<?php
session_start();
include 'events.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trabalho-PHP | Emerson | Taynara |</title>
</head>
<body>
    <h1>Eventos Culturais em Curitiba</h1>
    <?php listar_eventos($events); ?>
    <p><a href="filtrar.php">Filtrar Eventos</a></p>
    <p><a href="login.php">Área Restrita</a></p>
</body>
</html>