<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Clone Facebook</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <meta name="description" content="Um site de login clone do facebook para o meu portifólio">
    <meta name="keywords" content="clone, facebook, project, portifolio, marcusluccas">
    <meta name="author" content="Marcus Vinicius B. M./marcusluccas">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook clone</h2>
            </div><!--logo-->

            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone</p>
                    <input type="email">
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password">
                </div><!--form-element-->
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="img1.png">
            </div><!--img-pessoas-->
            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será!</h3>
                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--w50-->
                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="E-mail" type="email">
                    </div><!--w100-->
                    <div class="w100">
                        <input placeholder="Senha" type="password">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>

                        <select name="nascimento-mes" class="nascimento">
                            <option value="1">Janeiro</option>
                            <option value="2">Feveireiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>

                        <select name="nascimento-ano" class="nascimento">
                            <?php
                            for ($i = 2024; $i >= 1905; $i--) {
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino" checked>
                            <h2>Masculino</h2>
                        </div><!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div><!--input-radio-->
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar!">
                    </div><!--w100-->

                    <div class="clear"></div>
                </form><!--criar-conta-->
            </div><!--abrir-conta-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a class="lingua" href="#">English (US)</a>
            <a class="lingua" href="#">Español</a>
            <a class="lingua" href="#">Français (France)</a>
            <a class="lingua" href="#">Italiano</a>
            <a class="lingua" href="#">Deutsch</a>
            <a class="lingua" href="#">العربية</a>
            <a class="lingua" href="#">हिन्दी</a>
            <a class="lingua" href="#">中文(简体)</a>
            <a class="lingua" href="#">日本語</a>
        </div><!--center-->

        <div style="border: 0; padding-top: 10px;" class="center">
            <a class="categoria" href="#">Cadastre-se</a>
            <a class="categoria" href="#">Entrar</a>
            <a class="categoria" href="#">Messenger</a>
            <a class="categoria" href="#">Facebook Lite</a>
            <a class="categoria" href="#">Celular</a>
            <a class="categoria" href="#">Encontrar amigos</a>
            <a class="categoria" href="#">Pessoas</a>
            <a class="categoria" href="#">Páginas</a>
            <a class="categoria" href="#">Locais</a>
            <a class="categoria" href="#">Jogos</a>
            <a class="categoria" href="#">Locais</a>
            <a class="categoria" href="#">Marketplace</a>
            <a class="categoria" href="#">Vídeos</a>
            <a class="categoria" href="#">Grupos</a>
            <a class="categoria" href="#">Receitas</a>
            <a class="categoria" href="#">Esportes</a>
            <a class="categoria" href="#">Look</a>
            <a class="categoria" href="#">Moments</a>
            <a class="categoria" href="#">Instagram</a>
            <a class="categoria" href="#">Local</a>
            <a class="categoria" href="#">Sobre</a>
            <a class="categoria" href="#">Criar anúncio</a>
            <a class="categoria" href="#">Desenvolvedores</a>
            <a class="categoria" href="#">Carreiras</a>
            <a class="categoria" href="#">Privacidade</a>
            <a class="categoria" href="#">Cookies</a>
            <a class="categoria" href="#">Opções de anúncio</a>
            <a class="categoria" href="#">Termos</a>
            <a class="categoria" href="#">Ajuda</a>
        </div><!--center-->
    </section><!--linguas-->
</body>

</html>