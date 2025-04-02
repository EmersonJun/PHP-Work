<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<?php
// Definição da função listar_eventos, que recebe um array de eventos e os exibe na tela.
function listar_eventos($events) {
    // Verifica se o array de eventos está vazio
    if (empty($events)) {
        echo "<p>Nenhum evento encontrado.</p>"; // Exibe uma mensagem caso não existam eventos
        return; // Encerra a função
    }

    echo "<ul>"; // Inicia uma lista HTML para exibir os eventos
    
    // Percorre o array de eventos para exibir cada um deles
    foreach ($events as $event) {
        echo "<li>"; // Inicia um item da lista para cada evento
        echo "<h2>{$event['titulo']}</h2>"; // Exibe o título do evento
        echo "<p><strong>Categoria:</strong> {$event['categoria']}</p>"; // Exibe a categoria do evento
        echo "<img src='{$event['imagem']}' alt='{$event['titulo']}' width='150'>"; // Exibe a imagem do evento
        echo "<p>{$event['descricao']}</p>"; // Exibe a descrição do evento
        echo "<p><a href='events.php?id={$event['id']}'>Ver mais detalhes</a></p>"; // Link para detalhes do evento
        echo "</li>"; // Fecha o item da lista
    }
    
    echo "</ul>"; // Fecha a lista HTML
}
?>
</body>
</html>
