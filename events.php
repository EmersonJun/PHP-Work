<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
</head>
<body>
    <?php 
    $events = [
        ["id" => 1, "titulo" => "Festival de Teatro de Curitiba", "categoria" => "Teatro", "descricao" => "O maior festival de teatro da América Latina.", "imagem" => "./img/foto-linasumizono-70.avif", "local" => "Teatro Guaíra", "data_hora" => "10 de Abril, 19h", "preco" => "R$ 50,00", "contato" => "(41) 99999-9999", "link" => "https://festivaldecuritiba.com.br/"],
        ["id" => 2, "titulo" => "Bienal de Arte Contemporânea", "categoria" => "Arte", "descricao" => "Exposição de artistas renomados.", "imagem" => "./img/bienal.jpg", "local" => "Museu Oscar Niemeyer", "data_hora" => "15 a 30 de Abril", "preco" => "Gratuito", "contato" => "(41) 98888-8888", "link" => "https://www.bienaldecuritiba.com.br/"],
        ["id" => 3, "titulo" => "Show na Ópera de Arame", "categoria" => "Música", "descricao" => "Apresentação especial na icônica Ópera de Arame.", "imagem" => "./img/operaArame.jpg", "local" => "Ópera de Arame", "data_hora" => "20 de Maio, 21h", "preco" => "R$ 80,00", "contato" => "(41) 97777-7777", "link" => "https://operadearame.com/"],
        ["id" => 4, "titulo" => "Feira do Poeta", "categoria" => "Literatura", "descricao" => "Encontro de escritores e amantes da poesia.", "imagem" => "./img/feiraPoeta.jpg", "local" => "Largo da Ordem", "data_hora" => "Sábados, 9h - 14h", "preco" => "Gratuito", "contato" => "(41) 96666-6666", "link" => "https://clube.gazetadopovo.com.br/noticias/outros/conheca-a-feira-do-poeta-e-a-programacao-em-curitiba/"],
        ["id" => 5, "titulo" => "Festival de Jazz de Curitiba", "categoria" => "Música", "descricao" => "Os melhores músicos de jazz reunidos.", "imagem" => "./img/festivalJazz.jpg", "local" => "Teatro Positivo", "data_hora" => "30 de Maio, 20h", "preco" => "R$ 120,00", "contato" => "(41) 95555-5555", "link" => "https://curitibacult.com.br/hermanos-gutierrez-em-curitiba-ultimos-ingressos-a-venda/"],
        ["id" => 6, "titulo" => "Festival de Cinema da UFPR", "categoria" => "Cinema", "descricao" => "Mostra de curtas e longas universitários.", "imagem" => "./img/festivalCinema.jpg", "local" => "UFPR", "data_hora" => "5 a 10 de Junho", "preco" => "Gratuito", "contato" => "(41) 94444-4444", "link" => "http://www.putz.ufpr.br/festival.html"],
        ["id" => 7, "titulo" => "Circuito de Arte Urbana", "categoria" => "Arte", "descricao" => "Intervenções artísticas nos muros da cidade.", "imagem" => "./img/circuitoArteUrbana.jpg", "local" => "Centro de Curitiba", "data_hora" => "10 de Julho", "preco" => "Gratuito", "contato" => "(41) 93333-3333", "link" => "https://www.historiadasartes.com/intervencao-artistica-urbana/"],
        ["id" => 8, "titulo" => "Bazar da Rua São Francisco", "categoria" => "Cultura", "descricao" => "Feira de artesanato e produtos autorais.", "imagem" => "./img/bazarSaoFancisco.jpg", "local" => "Rua São Francisco", "data_hora" => "15 de Agosto", "preco" => "Gratuito", "contato" => "(41) 92222-2222", "link" => "https://brechosaofrancisco.com.br/site/"],
        ["id" => 9, "titulo" => "Concerto na Capela Santa Maria", "categoria" => "Música", "descricao" => "Orquestra de câmara em concerto.", "imagem" => "./img/concertoSM.jpg", "local" => "Capela Santa Maria", "data_hora" => "22 de Setembro", "preco" => "R$ 60,00", "contato" => "(41) 91111-1111", "link" => "https://www.curitiba.pr.gov.br/noticias/capela-santa-maria-recebe-concertos-que-celebram-a-historia-da-musica/75703"],
        ["id" => 10, "titulo" => "Festival de Dança de Curitiba", "categoria" => "Dança", "descricao" => "Companhias de dança mostram seus espetáculos.", "imagem" => "./img/festivalDeDanca.jpg", "local" => "Teatro Guaíra", "data_hora" => "30 de Outubro", "preco" => "R$ 50,00", "contato" => "(41) 90000-0000", "link" => "https://esporte.curitiba.pr.gov.br/conteudo/danca-curitiba/790"],
        ["id" => 11, "titulo" => "Festival de Cerveja Artesanal", "categoria" => "Gastronomia", "descricao" => "Degustação das melhores cervejas.", "imagem" => "./img/cervejaArtesanal.jpg", "local" => "Praça Espanha", "data_hora" => "15 de Novembro", "preco" => "R$ 30,00", "contato" => "(41) 89999-9999", "link" => "https://www.procerva.com.br/eventos/"],
        ["id" => 12, "titulo" => "Noite de Contação de Histórias", "categoria" => "Literatura", "descricao" => "Sessão especial com contadores de histórias.", "imagem" => "./img/contacao.png", "local" => "Biblioteca Pública", "data_hora" => "25 de Novembro", "preco" => "Gratuito", "contato" => "(41) 88888-8888", "link" => "https://globoplay.globo.com/v/11571927/"],
        ["id" => 13, "titulo" => "Mostra de Arte Independente", "categoria" => "Arte", "descricao" => "Exibição de obras de artistas locais.", "imagem" => "./img/MostraDeArteIndependente.jpg", "local" => "Casa Hoffmann", "data_hora" => "5 de Dezembro", "preco" => "R$ 20,00", "contato" => "(41) 87777-7777", "link" => "https://guia.curitiba.pr.gov.br/evento/feira-de-arte-independente-universo/4233#!"],
        ["id" => 14, "titulo" => "Semana da Fotografia", "categoria" => "Fotografia", "descricao" => "Exposição de fotógrafos curitibanos.", "imagem" => "./img/semanaDaFotografia.jpg", "local" => "Museu da Fotografia", "data_hora" => "10 a 17 de Dezembro", "preco" => "Gratuito", "contato" => "(41) 86666-6666", "link" => "https://semanadafotografia.com.br/curitiba-2023/"]
    ];

    if (isset($_SESSION['events'])) {
        $events = array_merge($events, $_SESSION['events']);
    }
    ?>
</body>
</html>
