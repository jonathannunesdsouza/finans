<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Estilo -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Finans - finanças pessoais</title>

  </head>
  <body>
    <header><!-- inicio cabeçalho -->
        
        <nav class="navbar navbar-expand-sm navbar-light bg-warning">

            <div class="container">

                <a href="#" class="navbar-brand">
                    <img src="imagens/logo.png" width="142">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span  class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal" >

                    <ul class=" navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Recursos</a>
                        </li>
                
                        <li class="nav-item">
                            <a href="#" class="nav-link">Benefícios</a>
                        </li>
                
                        <li class="nav-item">
                            <a href="#" class="nav-link">Preços</a>
                        </li>
                
                        <li>
                            <a href="#" class="btn btn-outline-light ml-4">Entrar</a>
                        </li>
                
                    </ul>
            
                </div>
            
            </div><!-- menu de navegação -->
        
        </nav><!-- fim menu de navegação -->

    </header><!-- fim cabeçalho -->

    <section class="bg-warning" id="home"><!-- inicio sessão -->

        <div class="container">

            <div class="row">

                <div class="col-md-6 d-flex "><!-- inicio textos da seção -->

                    <div class="align-self-center">
                        <h1 class="display-4 text-light">Suas contas descomplicadas</h1>
                        <p class="lead text-light">
                            
                            Usado por mais de 1 milhão de pessoas, o Finans é uma ferramenta online que vai facilitar a sua vida financeira.

                        </p>

                        <p class="lead text-light">
                            
                            <strong>Cadastre-se de forma gratuita na nossa Newsletter</strong> e fique por dentro das novidades da ferramenta.

                        </p>

                        <form action="processa_envio.php" method="post" class="mt-4 mb-4">

                            <div class="input-group input-group-lg">
                                <input type="text" name="usuario_newsletter" placeholder="Informe seu melhor e-mail" class="form-control">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Newsletter</button>
                                </div>

                            </div>

                            <? if (isset($_GET['newsletter']) && $_GET['newsletter'] == 'cadastrado') {?>
                                <div class="text-success mt-2">
                                Obrigado por se cadastrar em nossa Newsletter!
                                </div>
                            <? } ?>

                        </form>

                        <p class="lead text-light">Disponível para:
                            <a href="#" class="btn btn-outline-light">
                            <i class="fab fa-android fa-lg"></i>
                            </a>

                            <a href="#" class="btn btn-outline-light">
                            <i class="fab fa-apple fa-lg"></i>
                            </a>
                        </p>

                    </div>
            
                </div><!-- fim textos da seção -->

                <div class="col-md-6 d-none d-md-block">
                    <img src="imagens/capa-mulher.png">
                </div>
          
            </div>
        
        </div>
      
    </section><!-- fim sessão -->

    <section class="conteudo"><!-- inicio | section - saiba -->

        <div class="container">

            <div class="row">

                <div class="col-md-6 d-flex">

                    <div class="align-self-center">

                        <h2>Saiba para onde vai o seu dinheiro</h2>

                        <p class="lead">

                            Com o FInans, você categoriza todos os seus lançamentos.
                            Com gráficos simples, você sabe de onde vem e para onde vai
                            o seu dinheiro.
                            
                        </p>

                        <a href="#" class="btn btn-primary">Veja mais</a>
                    
                    </div>
                
                </div>


                <div class="col-md-6 d-flex">

                    <div class="align-self-center">

                        <img src="imagens/saiba.png" class="img-fluid">
                
                    </div>
                
                </div>


            </div>
        
        </div>
      
    </section><!-- fim | section - saiba -->

    <section class="conteudo"><!-- inicio | section - juros -->

        <div class="container">

            <div class="row">

                <div class="col-md-6 d-flex">

                    <div class="align-self-center">

                        <img src="imagens/juros.png" class="img-fluid">

              
                    </div>
            
                </div>


                <div class="col-md-6 d-flex">

                    <div class="align-self-center">

                        <h2>Pare de pagar juros e economize</h2>

                        <p class="lead">

                            Manter as contas em dia é sempre um problema? O Finans
                            avisa você: receba alertas de contas a pagar e a  receber.
                
                        </p>

                        <a href="#" class="btn btn-primary">Veja mais</a>
              
              
                    </div>
            
                </div>


            </div>
        
        </div>
      
    </section><!-- fim | section - juros -->

    <section class="conteudo"><!-- inicio | section recursos -->

        <div class="container"><!-- inicio | container - beneficios -->

            <div class="row"><!-- inicio | row-1/linha-1 -->

                <div class="col-md-4"><!-- inicio | coluna-1/col-md-4 -->
            
                    <img src="imagens/facil.png" class="img-fluid">

                    <h3>Fácil de usar</h3>

                    <p class="lead" style="font-size: 19px;" >

                        O Finans vai além do básico e permite que você
                        faça controles incríveis, essencias para suas
                        finanças. Simples como tem que ser!
              
                    </p>


                </div><!-- fim | coluna-1/col-md-4 -->

                <div class="col-md-4 text-justify"><!-- inicio | coluna-2/col-md-4 -->

                    <img src="imagens/economize.png" class="img-fluid">

                    <h3>Economize seu tempo</h3>

                    <p class="lead" style="font-size: 18px;">

                        Tempo é dinheiro! Em segundos, você tem tudo
                        sob controle e aproveite seu tempo com o que realmente
                        importa pra você.
                        
                    </p>
            
                </div><!-- fim | coluna-2/col-md-4 -->

                <div class="col-md-4"><!-- inicio | coluna-3/col-md-4 -->

                    <img src="imagens/suporte.png" class="img-fluid">

                    <h3>Suporte amigo</h3>

                    <p class="lead" style="font-size: 18px;" >

                         Dúvidas? Perguntas? Nosso suporte super legal
                        ajuda você! A gente tá aqui pra resolver seus
                        problemas e deixar a sua vida bem mais fácil!
                        
                    </p>
                        
                </div><!-- fim | coluna-3/col-md-4 -->

          
            </div><!-- fim | row-1/linha-1 -->
        
        </div><!-- fim | container - beneficios -->
      
    </section><!-- fim | section recursos -->

    <footer class="mt-4 mb-4"><!-- inicio | footer/rodapé -->

      <div class="container">

        <div class="row">

          <div class="col-md-8"><!-- inicio | menu footer/rodapé -->

            <p>
              <a href="#">Home</a>
              <a href="#">Recursos</a>
              <a href="#">Benefícios</a>
              <a href="#">Preços</a>
              <a href="contato.php">Contato</a>

            </p>
            
          </div><!-- fim | menu footer/rodapé -->

          <div class="col-md-4 d-flex justify-content-end"><!-- inicio  | redes sociais -->
            
            <a href="#" class="btn btn-outline-dark text-secondary">

              <i class="fab fa-facebook-square"></i><!-- icone | facebook -->

            </a>

            <a href="#" class="btn btn-outline-dark text-secondary ml-2">

              <i class="fab fa-twitter "></i><!-- icone | twitter -->

            </a>

            <a href="#" class="btn btn-outline-dark text-secondary  ml-2">

              <i class="fab fa-instagram"></i><!-- icone | instagram -->

            </a>

            <a href="#" class="btn btn-outline-dark text-secondary ml-2">

              <i class="fab fa-youtube"></i><!-- icone | youtube -->

            </a>
          
          </div><!-- fim  | redes sociais -->
          
        </div>
        
      </div>
      
    </footer><!-- fim | footer/rodapé -->


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>