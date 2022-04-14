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
            <h1 class="text-white mt-3 title-logo">Avante Carros</h1>
          </div>
          <div class="col-lg-6 text-right">
            <nav class="menu">
              <a href="index.html" class="active">Início</a>
              <a
                href="#"
                data-toggle="modal" data-target=".bd-example-modal-lg"
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
          background-image: linear-gradient(#5429CC, #5429CCcd),
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
          background-image: linear-gradient(#5429CC, #5429CCcd),
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
          background-image: linear-gradient(#5429CC, #5429CCcd),
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Registro de usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="row">
                <div class="col-lg-4 form-group">
                  <label for="">Nome Completo <span class="text-danger">*</span></label>
                  <input type="text" name="nome" class="form-control" placeholder="João Francisco" required>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="">E-mail <span class="text-danger">*</span></label>
                  <input type="text" name="email" class="form-control" placeholder="exmplo@gmail.com" required>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="">Palavra-passe <span class="text-danger">*</span></label>
                  <input type="password" name="senha" class="form-control" placeholder="password" required>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="">Bilhete de Identidade</label>
                  <input type="text" name="bi" maxlength="15" class="form-control" placeholder="000000000000LA0">
                </div>
                <div class="col-lg-4 form-group">
                  <label for="">Nº de Telefone <span class="text-danger">*</span></label>
                  <input type="tel" name="telefone" maxlength="9" class="form-control" placeholder="922XXXXXX" required>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="">Idade <span class="text-danger">*</span></label>
                  <input type="number" name="idade" maxlength="3" class="form-control" placeholder="29" required>
                </div>
                <div class="col-lg-12 form-group">
                  <label for="">Genero <span class="text-danger">*</span></label>
                  <select name="genero" class="form-control">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                  </select>
                </div>
                <div class="col-lg-4">
                  <button class="btn btn-primary form-control" name="criar_conta">
                    Criar conta
                  </button>
                </div>
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
