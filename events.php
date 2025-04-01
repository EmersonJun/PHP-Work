<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
</head>
<body>
    <?php 
        $events =[
            ["id" => 1, "titulo" => "Festival de Teatro de Curitiba", "categoria" => "Teatro", "descricao" => "O maior festival de teatro da América Latina.", "imagem" => "festival_teatro.jpg"],
            ["id" => 2, "titulo" => "Bienal de Arte Contemporânea", "categoria" => "Arte", "descricao" => "Exposição de artistas renomados e novos talentos.", "imagem" => "bienal_arte.jpg"],
            ["id" => 3, "titulo" => "Show na Ópera de Arame", "categoria" => "Música", "descricao" => "Apresentação especial na icônica Ópera de Arame.", "imagem" => "opera_arame.jpg"],
            ["id" => 4, "titulo" => "Feira do Poeta", "categoria" => "Literatura", "descricao" => "Encontro de escritores e amantes da poesia.", "imagem" => "feira_poeta.jpg"],
            ["id" => 5, "titulo" => "Festival de Jazz de Curitiba", "categoria" => "Música", "descricao" => "Os melhores músicos de jazz reunidos na cidade.", "imagem" => "festival_jazz.jpg"],
            ["id" => 6, "titulo" => "Festival de Cinema da UFPR", "categoria" => "Cinema", "descricao" => "Mostra de curtas e longas universitários.", "imagem" => "festival_cinema.jpg"],
            ["id" => 7, "titulo" => "Circuito de Arte Urbana", "categoria" => "Arte", "descricao" => "Intervenções artísticas nos muros da cidade.", "imagem" => "arte_urbana.jpg"],
            ["id" => 8, "titulo" => "Bazar da Rua São Francisco", "categoria" => "Cultura", "descricao" => "Feira de artesanato e produtos autorais.", "imagem" => "bazar_sf.jpg"],
            ["id" => 9, "titulo" => "Concerto na Capela Santa Maria", "categoria" => "Música", "descricao" => "Orquestra de câmara se apresenta em concerto.", "imagem" => "concerto_santa_maria.jpg"],
            ["id" => 10, "titulo" => "Festival de Dança de Curitiba", "categoria" => "Dança", "descricao" => "Companhias de dança mostram seus espetáculos.", "imagem" => "festival_danca.jpg"],
            ["id" => 11, "titulo" => "Festival de Cerveja Artesanal", "categoria" => "Gastronomia", "descricao" => "Degustação das melhores cervejas da região.", "imagem" => "festival_cerveja.jpg"],
            ["id" => 12, "titulo" => "Noite de Contação de Histórias", "categoria" => "Literatura", "descricao" => "Sessão especial com contadores de histórias.", "imagem" => "contacao_historias.jpg"],
            ["id" => 13, "titulo" => "Mostra de Arte Independente", "categoria" => "Arte", "descricao" => "Exibição de obras de artistas locais.", "imagem" => "mostra_arte.jpg"],
            ["id" => 14, "titulo" => "Semana da Fotografia", "categoria" => "Fotografia", "descricao" => "Exposição de fotógrafos curitibanos.", "imagem" => "semana_fotografia.jpg"],
            ["id" => 15, "titulo" => "Festival de Comida de Rua", "categoria" => "Gastronomia", "descricao" => "Os melhores food trucks reunidos em um só lugar.", "imagem" => "festival_comida.jpg"],
            ["id" => 16, "titulo" => "Sarau Literário", "categoria" => "Literatura", "descricao" => "Poetas e escritores compartilham suas obras.", "imagem" => "sarau_literario.jpg"],
            ["id" => 17, "titulo" => "Festival de Rock Independente", "categoria" => "Música", "descricao" => "Bandas locais e nacionais se apresentam.", "imagem" => "festival_rock.jpg"],
            ["id" => 18, "titulo" => "Feira Vegana de Curitiba", "categoria" => "Gastronomia", "descricao" => "Produtos e alimentos 100% veganos.", "imagem" => "feira_vegana.jpg"],
            ["id" => 19, "titulo" => "Festival de Cultura Japonesa", "categoria" => "Cultura", "descricao" => "Gastronomia, danças e cultura do Japão.", "imagem" => "cultura_japonesa.jpg"],
            ["id" => 20, "titulo" => "Oficina de Escrita Criativa", "categoria" => "Literatura", "descricao" => "Workshop para desenvolver técnicas de escrita.", "imagem" => "escrita_criativa.jpg"]
        ];
        if (isset($_SESSION['eventos'])) {
            $eventos = array_merge($eventos, $_SESSION['eventos']);
        }
        ?>
    ?>
</body>
</html>