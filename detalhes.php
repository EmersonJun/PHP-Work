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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Evento</title>
</head>
<body>
    <h1><?= htmlspecialchars($eventoSelecionado['titulo']) ?></h1>
    
    <img src="<?= htmlspecialchars($eventoSelecionado['imagem']) ?>" alt="<?= htmlspecialchars($eventoSelecionado['titulo']) ?>" width="300">
    
    <p><strong>Categoria:</strong> <?= htmlspecialchars($eventoSelecionado['categoria']) ?></p>
    <p><strong>Descrição:</strong> <?= htmlspecialchars($eventoSelecionado['descricao']) ?></p>
    <p><strong>Local:</strong> <?= htmlspecialchars($eventoSelecionado['local']) ?></p>
    <p><strong>Data e Hora:</strong> <?= htmlspecialchars($eventoSelecionado['data_hora']) ?></p>
    <p><strong>Preço:</strong> <?= htmlspecialchars($eventoSelecionado['preco']) ?></p>
    <p><strong>Contato:</strong> <?= htmlspecialchars($eventoSelecionado['contato']) ?></p>
    <p><strong>Mais Informações:</strong> <a href="<?= htmlspecialchars($eventoSelecionado['link']) ?>" target="_blank">Clique aqui</a></p>
    
    <p><a href="index.php">Voltar</a></p>
</body>
</html>
