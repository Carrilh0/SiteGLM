<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta name="description" content="Informação de qualidade e conteúdos exclusivos de especialistas do mercado de MMN e Venda Direta.">
    <meta name='robots' content='index, follow'>

    <meta property='og:title' content='GLM | Grupo Loucos por Marketing' />

    <meta property='og:description' content='Informação de qualidade e conteúdos exclusivos de especialistas do mercado de MMN e Venda Direta.' />

    <meta property='og:image' content='img/glm32xx32_2.png' />
    <link rel="shortcut icon" href="img/glm32xx32_2.png" type="image/x-icon">
    <link rel="icon" href="img/glm32xx32_2.png" type="image/x-icon">
    <link href="css/bulma.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/body.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" rel="stylesheet">

    <title>GLM | Grupo Loucos por Marketing</title>
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    <img src="img/logo_glm.png" width="112" height="522">
                </a>
                <ul>

                    <li><a href="#grupo" class="navbar-item">
            O Grupo
          </a></li>
                    <li><a href="#marcas" class="navbar-item">
            Nossas Marcas
          </a></li>
                    <li><a href="#equipe" class="navbar-item">
            Nossa Equipe
          </a></li>
                    <li><a href="#contato" class="navbar-item">
            Contato
          </a></li>
                </ul>

                <div class="nav-icons">
                    <a class="navbar-item" href="https://www.facebook.com/jabutiazulbrasil/">
                        <img class="image is-16x16" src="img/icon_face.png" width="112" height="522">
                    </a>
                    <a class="navbar-item" href="https://www.instagram.com/jabutiazulbrasil/">
                        <img class="image is-16x16" src="img/icon_insta.png" width="112" height="522">
                    </a>
                    <a class="navbar-item" href="https://www.youtube.com/channel/UCsD0kd1U87UQ-Rd42Heir9g">
                        <img class="image is-16x16" src="img/icon_yt.png" width="112" height="522">
                    </a>
                    </li>
                </div>

            </div>


        </div>
    </nav>
<?php if (isset($_GET["success"])) {
    echo'<article id="success" class="message is-success is-small">
            <div class="message-header">
                <p>Sucesso</p>
                <button class="delete" aria-label="delete" onClick="hide()"></button>
            </div>
            <div class="message-body">
                Formulário enviado com sucesso!
            </div>
        </article>';
}
?>
    <section class="top-banner is-hidden-mobile">
        <div class="imagem">
            <img src="img/banner_topo_novo.png">
        </div>
    </section>
    <section class="top-banner is-hidden-desktop">
        <div class="imagem">
            <img src="img/banner_topo_mobile_novo.png">
        </div>
    </section>



    <section class="section-marca">
        <div class="container">
            <div class="columns">
                <div class="column marca is-flex">
                    <div class="imagem ">
                        <img src="img/jabuti_img.png">
                    </div>
                </div>
                <div class="column content">
                    <div class="content jabuti">
                        <h1>Jabuti <br> Azul</h1>
                        <p>O JABUTI AZUL é o maior canal de conteúdos sobre o mercado de Venda Direta e Marketing Multinível do Brasil. </p>
                        <p>São 27 especialistas, entre colunistas e conteudistas, que trazem informações exclusivas para você se qualificar e tornar-se um grande líder de sucesso. </p>
                        <p>Duas vezes por semana você encontra no nosso canal do Youtube entrevistas, dicas e conteúdos exclusivos de grandes nomes do mercado reconhecidos internacionalmente.</p>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="section-1">
        <div class="container">

            <div class="columns">
                <div class="column is-4-desktop is-12-mobile">
                    <div class="video is-flex">
                        <iframe src="https://www.youtube.com/embed/6RHMW5puu1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="column is-8-desktop is-12-mobile">
                    <div class="content">
                        <p class="has-text-weight-boldered">No canal do Jabuti Azul você vai encontrar as seguintes colunas: </p>
                        <ul class="colunas">
                            <li>Jabuti Cultural </li>
                            <li>Jabuti Jurídico</li>
                            <li>Jabuti Professor</li>
                            <li>Jabuti Digital </li>
                            <li>Freud Explica </li>
                            <li>Jabuti Comunicação </li>
                            <li>Mulher Maravilha </li>
                            <br>
                            <li>Construtores de Sucesso</li>
                            <li>Jornal Loucos Por Marketing</li>
                            <br>
                            <li>Direto dos EUA</li>
                            <li>Momento Coach </li>
                            <li>Mundo Multinível </li>
                            <br>
                            <li>Cheguei até aqui porque...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="section-selo">
        <div class="container">
            <div class="columns">
                <div class="column selo">
                    <div class="container-selo">
                        <div class="content-selo">
                            <div class="imagem">
                                <img src="img/f367dc3b-96f4-449c-bea6-912529330912.jpg">
                            </div>
                            <a href="/formulario">Clique Aqui</a>
                            <span>Leia o regulamento e preencha o formulário para participar.</span>
                        </div>
                    </div>
                </div>
                <div class="column texts">
                    <div class="content">
                        <div class="title">
                            <p>Estão abertas as inscrições para o Selo de Excelência em MMN 2020 do Jabuti Azul</p>
                        </div>
                        <p>O Selo de Excelência em MMN Jabuti Azul é uma certificação para as empresas de MMN que cumprirem os requisitos básicos das práticas e boas condutas deste mercado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="grupo" class="section-marca">
        <div class="container">
            <div class="columns">
                <div class="column marca is-flex">
                    <div class="imagem ">
                        <img src="img/banner_glm2.png">
                    </div>
                </div>
                <div class="column content">
                    <div class="content">
                        <h1>Grupo Loucos por Marketing</h1>
                        <p>O Grupo Loucos Por Marketing foi criado para ampliar o Jornal Loucos Por Marketing fundado por Paulo de Tarso Aragão há 12 anos, que queria oferecer mais informações de qualidade ao mercado e serviços para as empresas de Venda
                            Direta e MKT Multinível. </p>
                        <p>O Grupo Loucos Por Marketing é hoje composto pelas seguintes empresas: </p>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section id="marcas" class="box-marcas">
        <div class="container">
            <div class="columns is-centered">
                <div class="column">
                    <div class="marca guttemberg">
                        <div class="imagem">
                            <img src="img/guttemberg.png">
                        </div>
                        <div class="content">
                            <p>A Consultoria de comunicação criativa que faltava para sua empresa ganhar mais diferenciais.</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="marca jabuti">
                        <div clas="columns">
                            <div class="column is-4">

                            </div>
                        </div>
                        <div class="imagem">
                            <img src="img/jabuti_azul.png">
                        </div>
                        <div class="content">
                            <p>Conheça mais sobre o JabutiAzul, o maior canal de conteúdos para Venda Direta e MKT Multinível do Youtube e o primeiro avaliador do mercado que premiará as empresas com o Selo de Excelência.</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="marca loucos">
                        <div class="imagem" style="width: 200px;">
                            <img src="img/logo_lpm.png">
                        </div>
                        <div class="content">
                            <p>O jornal pioneiro e de maior credibilidade do mercado de Marketing Multinível.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="section-marca">
        <div class="container">
            <div class="columns">
                <div class="column marca is-flex">
                    <div class="imagem ">
                        <img src="img/guttemberg_img.png">
                    </div>
                </div>
                <div class="column content">
                    <div class="content guttemberg">
                        <h1>Guttemberg <br> Comunicação</h1>
                        <p>Já pensou em ter um departamento de comunicação fora da sua empresa, com uma equipe criativa que vai te ensinar como ganhar novos diferenciais competitivos no mercado e aumentar suas vendas?</p>
                        <p>Seja bem-vindo à <b>Guttemberg Comunicação!</b></p>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="section-end">
        <div class="container">
            <div class="box-container">
                <div class="columns is-mobile is-multiline is-centered">
                    <div class="column is-4-desktop is-12-mobile">
                        <div class="box-content">
                            <img src="img/5.png">

                            <div class="content black">
                                <p>Estratégias de Divulgação do Negócio e Consultoria de Comunicação</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-mobile">
                        <div class="box-content">
                            <img src="img/4.png">

                            <div class="content orange">
                                <p>Entrevistas em vídeos e áudios para seus eventos, reuniões e redes sociais.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-mobile">
                        <div class="box-content">
                            <img src="img/3.png">

                            <div class="content black">
                                <p>Palestras de Comunicação para <br>Empresas e Eventos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-mobile">
                        <div class="box-content">
                            <img src="img/2.png">
                            <div class="content orange">
                                <p>Conteúdos diversos: Blogs, e-books, manuais de treinamento, livros e outros.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-mobile">
                        <div class="box-content">
                            <img src="img/1.png">

                            <div class="content black">
                                <p>Workshops de Comunicação para equipes, focadas em relacionamento de redes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="has-text-centered" style="padding: 0 20px;">
                <p>Solicite uma reunião ou videoconferência para obter um orçamento sob medida.</p>
                <p><b>E-mail:</b> contato@grupoloucospormarketing.com.br</p>
            </div>
    </section>

    <section id="equipe" class="section-equipe">
        <div class="container">
            <div class="title is-uppercase has-text-centered ">
                <h1 class="has-text-weight-bold">NOSSA EQUIPE</h1>
            </div>
            <div class="adjust">
                <div class="columns is-multiline is-centered">
                    <div class="column is-6">
                        <div class="box-pessoa">
                            <div class="image">
                                <img src="img/paulo_de_tarso.png">
                            </div>
                            <div class="nome">
                                <p>Paulo de Tarso Aragão</p>
                            </div>
                            <div class="descricao">
                                <p>Psicólogo e Publicitário, Paulo de Tarso Aragão é Criador e Fundador do Jornal Loucos Por Marketing e Co-fundador do Jabuti Azul e da Guttemberg Comunicação. É colunista do Jornal Loucos Por Marketing no canal Jabuti Azul</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box-pessoa">
                            <div class="image">
                                <img src="img/Monica_cintra.png">
                            </div>
                            <div class="nome">
                                <p>Monica Cintra</p>
                            </div>
                            <div class="descricao">
                                <p>Monica Cintra é Jornalista e especialista em Comunicação Empresarial. É Editora e Apresentadora do canal Jabuti Azul e co-fundadora da Guttemberg Comunicação. É colunista do Jabuti Comunicação no canal Jabuti Azul.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box-pessoa">
                            <div class="image">
                                <img src="img/cauan_cintra.png">
                            </div>
                            <div class="nome">
                                <p>Cauan Cintra</p>
                            </div>
                            <div class="descricao">
                                <p>Cauan Cintra é Diretor de imagens e Produtor do Canal Jabuti Azul</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box-pessoa">
                            <div class="image">
                                <img src="img/fernando_perez.png">
                            </div>
                            <div class="nome">
                                <p>Fernando Perez</p>
                            </div>
                            <div class="descricao">
                                <p>Fernando Perez é Auxiliar de Produção e de Cenografia do canal Jabuti Azul.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subtitle is-uppercase">
                <h1 class="has-text-weight-bold">COLUNISTAS: </h1>
            </div>
            <div class="carousel-colunista">
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/paulo_de_tarso.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Paulo de Tarso Aragão</p>
                    </div>
                    <div class="cargo">
                        <p>JORNAL LOUCOS POR MARKETING</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/Monica_cintra.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Monica Cintra</p>
                    </div>
                    <div class="cargo">
                        <p>JABUTI COMUNICAÇÃO</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/Denise_Oliveira_Colunista_FreudExplica.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Denise Oliveria</p>
                    </div>
                    <div class="cargo">
                        <p>FREUD EXPLICA</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/Elizia_Simionato_colunista_mulher_maravilha.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Elizia Simionato</p>
                    </div>
                    <div class="cargo">
                        <p>MULHER MARAVILHA</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/joseilton_azevedo_colunista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Joseilton Azevedo</p>
                    </div>
                    <div class="cargo">
                        <p>JABUTI DIGITAL</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/Paulo_Barlow_Colunista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Paulo Barlow</p>
                    </div>
                    <div class="cargo">
                        <p>DIRETO DOS EUA</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/Sar_Israel_colunista_jabuti_Digital.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Sar Israel</p>
                    </div>
                    <div class="cargo">
                        <p>JABUTI JURÍDICO</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/ricardo_cunha_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Ricardo Cunha</p>
                    </div>
                    <div class="cargo">
                        <p>JABUTI PROFESSOR</p>
                    </div>
                </div>
            </div>
            <div class="subtitle is-uppercase">
                <h1 class="has-text-weight-bold">CONTEUDISTAS:</h1>
            </div>
            <div class="carousel-conteudista">
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/cândido_belloni_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Cândido Belloni</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/Edmundo_Roverti_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Edmundo Roverti</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/hilda_bovolon_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Hilda Bovolon</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/marcelo_gabriel_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Marcelo Gabriel</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/Marcio_Giacobelli_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Marcio Giacobell</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/marcio_stalschimidit_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Marcio Stalschimidit</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/Marta_Wanderley_Aguiar_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Marta Wanderley</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/martinelly_santos_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Martinelly Santos</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/mauro_dos_anjos_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Mauro dos Anjos</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/mauro_galhardo_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Mauro Galhardo</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/Miguel_mar_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Miguel Mar</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/mohamed_gorayeb_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Mohamed Gorayeb</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/rodolfo_gasparian_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Rodolfo Gasparian</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/rodrigo_panduro_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Rodrigo Panduro</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/rui_souza_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Rui Souza</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/saulo_coelho_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Saulo Coelho</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/silmara_braga_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Silmara Braga</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="img/William_bill_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">William Bill</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contato" class="footer">
        <div class="columns is-8">
            <div class="column is-12">
                <div class="contato">
                    <p class="title">FALE CONOSCO:</p>
                    <p class="subtitle">contato@grupoloucospormarketing.com.br</p>
                </div>
                <div class="rede-sociais">
                    <p class="title" style="margin-bottom: 0;">REDES SOCIAIS:</p>
                    <a href="https://www.facebook.com/jabutiazulbrasil/"><i class="fab fa-facebook" style="color: #fff;"></i></a>

                    <a href="https://www.instagram.com/jabutiazulbrasil/"><i class="fab fa-instagram"style="color: #fff;"></i></a>

                    <a href="https://www.youtube.com/channel/UCsD0kd1U87UQ-Rd42Heir9g"><i class="fab fa-youtube" style="color: #fff;"></i></a>


                    <p class="subtitle"></p>
                </div>
                <div class="sugetoes">
                    <p class="title">SUGESTÕES DE PAUTA E ASSUNTOS PARA O CANAL JABUTI AZUL:</p>
                    <p class="subtitle">monica@grupoloucospormarketing.com.br</p>
                </div>
                <div class="anuncios">
                    <p class="title">ANÚNCIOS:</p>
                    <p class="subtitle">paulo@grupoloucospormarketing.com.br</p>
                </div>
                <div class="perguntas">
                    <p class="title">PERGUNTAS PARA OS COLUNISTAS E CONTÉUDISTAS DO JABUTI AZUL:</p>
                    <p class="subtitle">jabutiazul@gmail.com</p>
                </div>
            </div>
        </div>

    </footer>

    <script src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
    <script>
        $('.carousel-colunista').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 500,
            slidesToShow: 7,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            }]
        });

        $('.carousel-conteudista').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
            speed: 500,
            slidesToShow: 7,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            }]
        });

        function hide() {
            $('#success').css({"display":"none"});
        }
    </script>

</body>

</html>