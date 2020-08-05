<html>

<head>
    <title>Formulário de Cadastro</title>
    <link href="css/form.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/glm32xx32_2.png" type="image/x-icon">
    <link rel="icon" href="img/glm32xx32_2.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="image">
                <img src="img/f367dc3b-96f4-449c-bea6-912529330912.jpg">
            </div>
            <h1 id="title" class="text-center">FICHA DE INSCRIÇÃO</h1>
            <p id="description" class="description text-center">
                SELO DE EXCELÊNCIA EM MMN 2020
            </p>
        </header>

        <form enctype="multipart/form-data" method="POST" action="phpMailer/incs/enviar-contato.php" >
            
            <div class="previews">
                <a href="downloads/Regulamento.pdf" target="_blank">
                    <div class="preview">
                        <div class="name">
                            REGULAMENTO
                        </div>
                        <div class="image">
                            <img src="img/regulamento.jpg">
                        </div>
                    </div>
                </a>
                <a href="downloads/FAQ.pdf" target="_blank">
                    <div class="preview">
                        <div class="name">
                            FAQ
                        </div>
                        <div class="image">
                            <img src="img/faq.jpg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="form-group">
                <label id="name-label" for="razao">Razão Social *</label>
                <input type="text" name="razao" id="razao" class="form-control" placeholder="Insira a razão social..." required/>
            </div>
            <div class="form-group">
                <label id="name-label" for="fantasia">Nome Fantasia *</label>
                <input type="text" name="fantasia" id="fantasia" class="form-control" placeholder="Insira o nome Fantasia..." required/>
            </div>
            <div class="form-group">
                <label id="name-label" for="cnpj">CNPJ *</label>
                <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="Ex: 99.999.999/9999-99" required/>
            </div>
            <div class="form-group">
                <label id="name-label" for="fundacao">Data de fundação *</label>
                <input type="text" name="fundacao" id="fundacao" class="form-control" placeholder="Ex: 99/99/9999" required/>
            </div>
            <div class="form-group">
                <label id="name-label" for="inicio">Ano de início no MMN *</label>
                <input type="text" name="inicio" id="inicio" class="form-control" placeholder="Ex: 1999" required/>
            </div>
            <div class="form-group">
                <label id="name-label" for="site">Site oficial da empresa *</label>
                <input type="text" name="site" id="site" class="form-control" placeholder="Ex: www.exemplo.com.br" required/>
            </div>
            <div class="form-group">
                <label id="name-label" for="nome">Nome do principal executivo ou representante oficial *</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Ex: João João" required/>
            </div>

            <div class="form-group">
                <label id="email-label" for="email">Email *</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Insira o email..." required />
            </div>

            <div class="form-group">
                <label id="email-label" for="file">Comprovante de pagamento *</label>
                <input type="file" name="file" id="file" class="form-control" placeholder="Enter your Email" required accept="image/*, application/pdf"/>
            </div>

            <div class="payment">
                <p>Após o preenchimento da Ficha de Inscrição, a empresa deverá efetuar o pagamento no valor de R$ 1.500,00 através de depósito bancário para: </p>

                <p>Banco Original </p>
                <p>Agência: 0001 </p>
                <p>Conta Corrente: 4043091-0 </p>
                <p>CPF: 089904248-10 </p>
                <p>Monica Isidori Cintra Perez</p>
            </div>
            <div class="form-group">
                <button type="submit" id="submit" class="submit-button">
                Enviar
                </button>
            </div>
        </form>
    </div>


</body>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
<script>
//Mascara CPF
$(document).ready(function(){
  $('#cnpj').mask('99.999.999/9999-99');
  $('#fundacao').mask('99/99/9999');
  $('#inicio').mask('9999');
});
</script>
</html>