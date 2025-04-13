<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit();
}
include 'events.php';
if (!isset($_SESSION['events'])) {
    $_SESSION['events'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novoEvento = [
        "id" => count($events) + count($_SESSION['events']) + 1,
        "titulo" => $_POST['titulo'],
        "categoria" => $_POST['categoria'],
        "descricao" => $_POST['descricao'],
        "imagem" => $_POST['imagem'],
        "local" => $_POST['local'],
        "data_hora" => $_POST['data_hora'],
        "preco" => $_POST['preco'],
        "contato" => $_POST['contato'],
        "link" => $_POST['link']
    ];
    $_SESSION['events'][] = $novoEvento;
    $mensagem = "Evento adicionado com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Protegida - Novo Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-secondary">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Adicionar Novo Evento</h2>
            <a href="index.php" class="btn btn-outline-dark">Voltar ao Início</a>
        </div>

        <?php if (!empty($mensagem)) { ?>
            <div class="alert alert-success"><?= htmlspecialchars($mensagem) ?></div>
        <?php } ?>

        <form method="POST" class="bg-white p-4 rounded-4 shadow">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" name="titulo" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" name="categoria" class="form-control" required>
                </div>
                <div class="col-md-12">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea name="descricao" class="form-control" rows="3" required></textarea>
                </div>
                <div class="col-md-6">
                    <label for="imagem" class="form-label">URL da Imagem</label>
                    <input type="text" name="imagem" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="local" class="form-label">Local</label>
                    <input type="text" name="local" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="data_hora" class="form-label">Data e Hora</label>
                    <input type="text" name="data_hora" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" name="preco" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="contato" class="form-label">Contato</label>
                    <input type="text" name="contato" class="form-control" required>
                </div>
                <div class="col-md-12">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" name="link" class="form-control" required>
                </div>
            </div>
            <div class="mt-4 d-grid">
                <button type="submit" class="btn btn-dark">Adicionar Evento</button>
            </div>
        </form>
    </div>
</body>
</html>
