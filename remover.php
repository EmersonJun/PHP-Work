<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idRemover = $_POST['id'] ?? null;

    if ($idRemover !== null && isset($_SESSION['events'])) {
        foreach ($_SESSION['events'] as $index => $event) {
            if ($event['id'] == $idRemover) {
                unset($_SESSION['events'][$index]);
                $_SESSION['events'] = array_values($_SESSION['events']);
                break;
            }
        }
    }
}

header("Location: index.php");
exit();
?>