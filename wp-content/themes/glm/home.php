
<?php
/* template name: home */
$path = get_template_directory_uri(); 

include_once("header.php") 

?>

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
            <img src="<?php echo $path?>/img/banner_topo_novo.png">
        </div>
    </section>
    <section class="top-banner is-hidden-desktop">
        <div class="imagem">
            <img src="<?php echo $path?>/img/banner_topo_mobile_novo.png">
        </div>
    </section>



    <section class="section-marca">
        <div class="container">
            <div class="columns">
                <div class="column marca is-flex">
                    <div class="imagem ">
                        <img src="<?php echo $path?>/img/jabuti_img.png">
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
                                <img src="<?php echo $path?>/img/f367dc3b-96f4-449c-bea6-912529330912.jpg">
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
                        <img src="<?php echo $path?>/img/banner_glm2.png">
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
                            <img src="<?php echo $path?>/img/guttemberg.png">
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
                            <img src="<?php echo $path?>/img/jabuti_azul.png">
                        </div>
                        <div class="content">
                            <p>Conheça mais sobre o JabutiAzul, o maior canal de conteúdos para Venda Direta e MKT Multinível do Youtube e o primeiro avaliador do mercado que premiará as empresas com o Selo de Excelência.</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                <a href="http://www.jornalloucospormarketing.com.br/">
                    <div class="marca loucos">
                        <div class="imagem" style="width: 200px;">
                            <img style="margin: 0px auto;" src="<?php echo $path?>/img/logo_lpm.png">
                        </div>
                        <div class="content">
                            <p>O jornal pioneiro e de maior credibilidade do mercado de Marketing Multinível.</p>
                        </div>
                    </div>
                </a>
                </div>

            </div>
        </div>

    </section>

    <section class="section-marca">
        <div class="container">
            <div class="columns">
                <div class="column marca is-flex">
                    <div class="imagem ">
                        <img src="<?php echo $path?>/img/guttemberg_img.png">
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
                            <img src="<?php echo $path?>/img/5.png">

                            <div class="content black">
                                <p>Estratégias de Divulgação do Negócio e Consultoria de Comunicação</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-mobile">
                        <div class="box-content">
                            <img src="<?php echo $path?>/img/4.png">

                            <div class="content orange">
                                <p>Entrevistas em vídeos e áudios para seus eventos, reuniões e redes sociais.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-mobile">
                        <div class="box-content">
                            <img src="<?php echo $path?>/img/3.png">

                            <div class="content black">
                                <p>Palestras de Comunicação para <br>Empresas e Eventos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-mobile">
                        <div class="box-content">
                            <img src="<?php echo $path?>/img/2.png">
                            <div class="content orange">
                                <p>Conteúdos diversos: Blogs, e-books, manuais de treinamento, livros e outros.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4-desktop is-12-mobile">
                        <div class="box-content">
                            <img src="<?php echo $path?>/img/1.png">

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
                                <img src="<?php echo $path?>/img/paulo_de_tarso.png">
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
                                <img src="<?php echo $path?>/img/Monica_cintra.png">
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
                                <img src="<?php echo $path?>/img/cauan_cintra.png">
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
                                <img src="<?php echo $path?>/img/fernando_perez.png">
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
                        <img src="<?php echo $path?>/img/paulo_de_tarso.png">
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
                        <img src="<?php echo $path?>/img/Monica_cintra.png">
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
                        <img src="<?php echo $path?>/img/Denise_Oliveira_Colunista_FreudExplica.png">
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
                        <img src="<?php echo $path?>/img/Elizia_Simionato_colunista_mulher_maravilha.png">
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
                        <img src="<?php echo $path?>/img/joseilton_azevedo_colunista.png">
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
                        <img src="<?php echo $path?>/img/Paulo_Barlow_Colunista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Paul Barlow</p>
                    </div>
                    <div class="cargo">
                        <p>DIRETO DOS EUA</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/Sar_Israel_colunista_jabuti_Digital.png">
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
                        <img src="<?php echo $path?>/img/ricardo_cunha_conteudista.png">
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
                        <img src="<?php echo $path?>/img/cândido_belloni_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Cândido Belloni</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/Edmundo_Roverti_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Edmundo Roveri</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/hilda_bovolon_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Hilda Bovolon</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/marcelo_gabriel_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Marcelo Gabriel</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/Marcio_Giacobelli_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Marcio Giacobelli</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/marcio_stalschimidit_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Marcio Stalschimidit</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/Marta_Wanderley_Aguiar_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Marta Wanderley</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/martinelly_santos_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Martinelly Santos</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/mauro_dos_anjos_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Mauro dos Anjos</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/mauro_galhardo_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Mauro Galhardo</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/Miguel_mar_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Miguel Mar</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/mohamed_gorayeb_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Mohamed Gorayeb</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/rodolfo_gasparian_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Rodolfo Gasparian</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/rodrigo_panduro_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Rodrigo Panduro</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/rui_souza_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Rui Souza</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/saulo_coelho_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Saulo Coelho</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/silmara_braga_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">Silmara Braga</p>
                    </div>
                </div>
                <div class="image-carousel has-text-centered">
                    <div class="image">
                        <img src="<?php echo $path?>/img/William_bill_conteudista.png">
                    </div>
                    <div class="nome">
                        <p class="has-text-weight-bold">William Bill</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

include_once("footer.php") 

?>