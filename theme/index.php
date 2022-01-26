<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de Gestão de Estacionamento</title>
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/styles/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/styles/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/styles/slider.css" />

    <!-- Meu Estilo -->
    <link rel="stylesheet" href="assets/styles/estacionamento.css" />
  </head>
  <body>
    <header class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="text-white mt-3 title-logo">System-Estans</h1>
          </div>
          <div class="col-lg-6 text-right">
            <nav class="menu">
              <a href="index.html" class="active">Início</a>
              <a
                href="#"
                class=""
                data-toggle="modal"
                data-target=".criar-estabelecimento"
                >Criar conta</a
              >
              <a href="login.php">Iniciar sessão</a>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Banner -->
    <div class="slide-one-item home-slider owl-carousel">
      <div
        class="testimonial bg-white banner_carousel"
        style="
          background-image: linear-gradient(#000000b7, #000000b7),
            url(assets/images/bg-2.jpg);
          background-size: cover;
        "
      >
        <div class="container">
          <div class="row">
            <header class="col-lg-12">
              <h1
                class="text-white text-uppercase ml-3"
                style="font-size: 50px !important"
              >
                Seja bem-vindo ao nosso sistema de estacionamento!
              </h1>
            </header>
          </div>
        </div>
      </div>
      <div
        class="testimonial bg-white banner_carousel"
        style="
          background-image: linear-gradient(#000000b7, #000000b7),
            url(assets/images/bg-2.jpg);
          background-size: cover;
        "
      >
        <div class="container">
          <div class="row">
            <header class="col-lg-12">
              <h1
                class="text-white"
                style="text-transform: uppercase; font-size: 50px !important"
              >
                Tens a tua oportunidade
              </h1>
              <h4 class="text-white">
                Seja um gestor de estacionamentos dentro do nosso sistema.
              </h4>
            </header>
          </div>
        </div>
      </div>
      <div
        class="testimonial bg-white banner_carousel"
        style="
          background-image: linear-gradient(#000000b7, #000000b7),
            url(assets/images/bg-7.jpg);
          background-size: cover;
        "
      >
        <div class="container">
          <div class="row">
            <header class="col-lg-12 text-left">
              <h1
                class="text-white"
                style="text-transform: uppercase; font-size: 50px !important"
              >
                Aqui mantemos o teu carro em segurança
              </h1>
            </header>
          </div>
        </div>
      </div>
    </div>
    <!-- End Banner -->


    <!-- Modal -->
    <div
      class="modal fade criar-estabelecimento"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
          <div class="modal-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                <label for="senha">Palavra-passe</label>
                <input type="password" id="senha" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                <input type="submit" value="Criar conta" class="form-control form-control-lg">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->

    <script src="assets/scripts/jquery-3.2.1.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>
    <script src="assets/scripts/owl.carousel.min.js"></script>
    <script src="assets/scripts/mk.js"></script>
  </body>
</html>
