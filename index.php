<?php declare(strict_types=1);
session_start();
include 'functions.php';
include 'events.php';

// Verifica se um filtro foi enviado via POST
$categoria = $_POST['categoria'] ?? '';
$eventosFiltrados = [];

if (!empty($categoria)) {
    $categoriaNormalizada = normalizarTexto($categoria);

    foreach ($events as $event) {
        $categoriaEventoNormalizada = normalizarTexto($event['categoria']);

        if ($categoriaEventoNormalizada === $categoriaNormalizada) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Culturais em Curitiba</title>
</head>
    <!-- retirado de moldelo do site do bootstrap -->
    <header class="mb-4">
    <nav class="navbar navbar-expand-lg navbar-dark btn btn-dark btn-sm w-100">
      <div class="container">
        <a class="navbar-brand text-white" href="index.php">Início</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="loggin.php">Loggin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true"></a>
          </li>
        </ul>

        <!-- formulário de filtragem -->
        <form method="POST" action="" class="d-flex align-items-center ms-auto" role="search">
          <input 
            type="text" 
            name="categoria" 
            id="categoria" 
            class="form-control form-control-sm me-2" 
            placeholder="Ex: Teatro, Música, etc." 
            value="<?= htmlspecialchars($categoria) ?>">
          <button type="submit" class="btn btn-secondary">Filtrar</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<body class="container-xxl">
    <h1 class="mb-4">Eventos Culturais em Curitiba</h1>

    <!-- Exibição dos eventos -->

    <!-- adicao de bootstrap -->
     <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"> <!-- efeitos ultilizados para embelezar o codigo -->
    <?php foreach ($eventosFiltrados as $event) { ?>
        <div class="col">
            <div class="card h-100">
                <img 
                    src="<?= htmlspecialchars($event['imagem']) ?>" 
                    class="card-img-top img-fluid object-fit-cover" 
                    style="height: 300px;" 
                    alt="<?= htmlspecialchars($event['titulo']) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($event['titulo']) ?></h5>
                    <p class="card-text"><strong>Categoria:</strong> <?= htmlspecialchars($event['categoria']) ?></p>
                    <a href="detalhes.php?id=<?= $event['id'] ?>" class="btn btn-secondary">Ver mais detalhes</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
</body>