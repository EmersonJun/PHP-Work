<?php declare(strict_types=1);
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

        // Exibe botão de remover se logado
        if (isset($_SESSION['logado'])) {
            echo "<form method='POST' action='remover.php' onsubmit='return confirm(\"Tem certeza que deseja remover este evento?\");'>";
            echo "<input type='hidden' name='id' value='{$event['id']}'>";
            echo "<button type='submit' class='btn btn-danger btn-sm'>Remover</button>";
            echo "</form>";
        }

        echo "</li>";
    }

    echo "</ul>";
}

function normalizarTexto($texto): string {
    $texto = mb_strtolower($texto, 'UTF-8');
    $texto = strtr($texto, [
        'á'=>'a','à'=>'a','â'=>'a','ã'=>'a','ä'=>'a',
        'é'=>'e','è'=>'e','ê'=>'e','ë'=>'e',
        'í'=>'i','ì'=>'i','î'=>'i','ï'=>'i',
        'ó'=>'o','ò'=>'o','ô'=>'o','õ'=>'o','ö'=>'o',
        'ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u',
        'ç'=>'c'
    ]);
    return $texto;
}
?>
