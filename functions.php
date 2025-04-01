<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php 
    function listar_eventos($events) {
        if (empty($events)) {
            echo "<p>Nenhum evento encontrado.</p>";
            return;
        }
    }
    ?>
</body>
</html>
