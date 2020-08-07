
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
                    <p class="title">PERGUNTAS PARA OS COLUNISTAS E CONTEUDISTAS DO JABUTI AZUL:</p>
                    <p class="subtitle">jabutiazul@gmail.com</p>
                </div>
            </div>
        </div>

    </footer>

    <script src="<?php echo $path?>/js/index.js"></script>
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