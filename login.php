<?php
session_start();

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Usuário e senha fixos para exemplo
    if ($usuario === 'admin' && $senha === '1234') {
        $_SESSION['logado'] = true;
        header('Location: protegida.php');
        exit();
    } else {
        $erro = 'Usuário ou senha inválidos.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card shadow p-4 rounded-4" style="width: 100%; max-width: 400px;">
        <h4 class="text-center mb-3">Login de Acesso</h4>
        <?php if ($erro){ ?>
            <div class="alert alert-danger"><?= htmlspecialchars($erro) ?></div>
        <?php } ?>
        <form method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" name="usuario" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Entrar</button>

                <a href="index.php" class="btn btn-outline-dark mt-2">Voltar ao Início</a>
            </div>
        </form>
    </div>
</body>
</html>
