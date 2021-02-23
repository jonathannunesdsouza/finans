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

    <title>Finans - Contato</title>

  </head>
  <body>
    <header><!-- inicio cabeçalho -->
            
        <nav class="navbar navbar-expand-sm navbar-light bg-warning">

            <div class="container">

                <a href="index.php" class="navbar-brand">
                    <img src="imagens/logo.png" width="142">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span  class="navbar-toggler-icon"></span>
                </button>
                
            </div><!-- menu de navegação -->
            
        </nav><!-- fim menu de navegação -->

    </header><!-- fim cabeçalho -->
    <section class="conteudo">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h2>Entre em contato conosco e tire suas dúvidas</h2>

                        <p class="lead">

                            Para nós da Finans, é muito importante que você não tenha dúvidas
                            sobre nossos serviços! Mande-nos um e-mail!
                            
                        </p>

                        <img class="mt-4" src="imagens/suporte-contato.png" width="426">
                    </div>
                </div>

                <div class="col-md-6 d-flex">
                    <div class="card-body font-weight-bold">
                            <form action="processa_envio.php" method="post">

                                <div class="form-group">
                                    <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assunto do e-mail">
                                </div>

                                <div class="form-group">
                                    <textarea name="mensagem" class="form-control" id="mensagem" placeholder="Mensagem do e-mail"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>
</html>