<?php declare(strict_types=1);
session_start();
include 'events.php';

// Obtém o ID do evento passado via GET
$id = $_GET['id'] ?? null;

// Procura o evento pelo ID
$eventoSelecionado = null;
foreach ($events as $event) {
    if ($event['id'] == $id) {
        $eventoSelecionado = $event;
        break;
    }
}

// Se o evento não for encontrado, redireciona para a página inicial
if (!$eventoSelecionado) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Evento</title>
</head>
<body class="p-3 mb-2 bg-dark-subtle text-dark-emphasis d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="card shadow rounded-4" style="width: 100%; max-width: 500px;">
        <img src="<?= htmlspecialchars($eventoSelecionado['imagem']) ?>" 
             class="card-img-top rounded-top-4" 
             alt="<?= htmlspecialchars($eventoSelecionado['titulo']) ?>" 
             style="height: 250px; object-fit: cover;">
             
        <div class="card-body">
            <h4 class="card-title"><?= htmlspecialchars($eventoSelecionado['titulo']) ?></h4>
            
            <p class="mb-1"><strong>Categoria:</strong> <?= htmlspecialchars($eventoSelecionado['categoria']) ?></p>
            <p class="mb-1"><strong>Descrição:</strong> <?= htmlspecialchars($eventoSelecionado['descricao']) ?></p>
            <p class="mb-1"><strong>Local:</strong> <?= htmlspecialchars($eventoSelecionado['local']) ?></p>
            <p class="mb-1"><strong>Data e Hora:</strong> <?= htmlspecialchars($eventoSelecionado['data_hora']) ?></p>
            <p class="mb-1"><strong>Preço:</strong> <?= htmlspecialchars($eventoSelecionado['preco']) ?></p>
            <p class="mb-3"><strong>Contato:</strong> <?= htmlspecialchars($eventoSelecionado['contato']) ?></p>

            <div class="d-grid gap-2">
                <a href="<?= htmlspecialchars($eventoSelecionado['link']) ?>" target="_blank" class="btn btn-dark btn-sm">Mais Informações</a>
                <a href="index.php" class="btn btn-secondary btn-sm">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>
