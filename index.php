<?php declare(strict_types=1);
session_start();
include 'functions.php';
include 'events.php';

// Verifica se um filtro foi enviado via POST
$categoria = $_POST['categoria'] ?? ''; // Usa operador de coalescência nula
$eventosFiltrados = [];

// Filtra os eventos com base na categoria selecionada
if (!empty($categoria)) {
    foreach ($events as $event) {
        if ($event['categoria'] === $categoria) {
            $eventosFiltrados[] = $event;
        }
    }
} else {
    $eventosFiltrados = $events; // Se nenhuma categoria for selecionada, mostra todos
}
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
    
    <!-- Formulário de filtragem -->
    <h2>Filtrar Eventos por Categoria</h2>
    <form method="POST" action="">
        <label for="categoria">Escolha uma categoria:</label>
        <select name="categoria" id="categoria">
            <option value="">Todas</option>
            <option value="Teatro" <?= ($categoria == "Teatro") ? 'selected' : '' ?>>Teatro</option>
            <option value="Arte" <?= ($categoria == "Arte") ? 'selected' : '' ?>>Arte</option>
            <option value="Música" <?= ($categoria == "Música") ? 'selected' : '' ?>>Música</option>
            <option value="Literatura" <?= ($categoria == "Literatura") ? 'selected' : '' ?>>Literatura</option>
            <option value="Cinema" <?= ($categoria == "Cinema") ? 'selected' : '' ?>>Cinema</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <!-- Exibição dos eventos -->
    <h2>Lista de Eventos</h2>
    <ul>
        <?php foreach ($eventosFiltrados as $event): ?>
            <li>
                <h2><?= htmlspecialchars($event['titulo']) ?></h2>
                <p><strong>Categoria:</strong> <?= htmlspecialchars($event['categoria']) ?></p>
                <img src="<?= htmlspecialchars($event['imagem']) ?>" alt="<?= htmlspecialchars($event['titulo']) ?>" width="150">
                <p><?= htmlspecialchars($event['descricao']) ?></p>
                <p><a href="detalhes.php?id=<?= $event['id'] ?>">Ver mais detalhes</a></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
