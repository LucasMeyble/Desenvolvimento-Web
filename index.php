<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/c7fdc36a59.js" crossorigin="anonymous"></script>
    <title>projeto 01</title>
</head>
<body>
    
    <header>
        <div class="center">
            <div class="logo left">Logomarca</div><!--Logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div><!--center-->
    </header>
    
    <section class="banner-principal">
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar">
            </form>
        </div>
    </section><!--banner-principal-->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Lucas Meyble R. Luna</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div><!--w50-->
            <div class="w50 left">
                <!--Pegar imagem depois-->
                <img style="width:200px" src="images/perfil.jpg">
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidades">
                <h3><i class="fab fa-css3-alt"></i></i></h3>
                <h3>CSS3</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div><!--box-especialidades-->
            <div class="w33 left box-especialidades">
                <h3><i class="fab fa-html5"></i></h3>
                <h3>Html</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div><!--box-especialidades-->
            <div class="w33 left box-especialidades">
                <h3><i class="fab fa-js-square"></i></h3>
                <h3>JavaScript</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div><!--box-especialidades-->
        </div><!--center-->
    </section><!--especialidades-->

    <section class="extras">
        <div class="center">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <p class="nome-autor">lorem ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <p class="nome-autor">lorem ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <p class="nome-autor">lorem ipsum</p>
                </div><!--depoimento-single-->
                <div class="clear"></div>
            </div><!--w50-->
            <div class="w50 left">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                    </ul>
                </div><!--servicos-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--estras-->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

</body>
</html>