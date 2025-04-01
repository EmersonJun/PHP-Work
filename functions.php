<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<?php
function listar_eventos($events) {
    if (empty($events)) {
        echo "<p>Nenhum evento encontrado.</p>";
        return;
    }

    echo "<ul>";
    foreach ($events as $event) {
        echo "<li>";
        echo "<h2>{$event['titulo']}</h2>";
        echo "<p><strong>Categoria:</strong> {$event['categoria']}</p>";
        echo "<img src='{$event['imagem']}' alt='{$event['titulo']}' width='150'>";
        echo "<p>{$event['descricao']}</p>";
        echo "<p><a href='events.php?id={$event['id']}'>Ver mais detalhes</a></p>";
        echo "</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>
