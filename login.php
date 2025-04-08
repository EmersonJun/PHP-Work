<?php
session_start();

// Usuário e senha fictícios (você pode integrar com banco de dados depois)
$usuarioValido = 'admin';
$senhaValida = '1234';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($usuario === $usuarioValido && $senha === $senhaValida) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h2>Login</h2>
    <?php if (!empty($erro)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($erro) ?></div>
    <?php endif; ?>
    <form method="POST" class="w-50">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário:</label>
            <input type="text" class="form-control" name="usuario" id="usuario" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="senha" id="senha" required>
        </div>
        <button type="submit" class="btn btn-dark">Entrar</button>
    </form>
</body>
</html>
