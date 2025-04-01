<?php
session_start();
include 'functions.php';
include 'events.php';    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Culturais em Curitiba</title>
</head>
<body>
    <h1>Eventos Culturais em Curitiba</h1>
        <?= listar_eventos($events); ?>
        <p><a href="filter.php">Filtrar Eventos</a></p>
</body>
</html>
