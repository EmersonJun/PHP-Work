<?php declare(strict_types=1);?>
<?php
session_start(); // Inicia a sessão

include 'events.php'; // Inclui os eventos disponíveis
include 'functions.php'; // Inclui a função para exibir eventos

// Obtém a categoria selecionada no formulário
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '';
$eventosFiltrados = [];

// Filtra os eventos de acordo com a categoria selecionada
if (!empty($categoria)) {
    foreach ($events as $event) {
        if ($event['categoria'] === $categoria) {
            $eventosFiltrados[] = $event;
        }
    }
} else {
    // Se nenhuma categoria for selecionada, exibe todos os eventos
    $eventosFiltrados = $events;
}

// Chama a função para listar os eventos filtrados
listar_eventos($eventosFiltrados);
?>
