
  <!-- Head -->
  <?php require 'includes/head.php'; ?>
  <!-- Head -->

  <body class="animsition">
    <div class="page-wrapper">
     <!-- Header -->
     <?php require 'includes/header.php';?>
     <!-- Header -->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop bg-admin barra-menu">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap">
                <div class="form-header" action="" method="POST"></div>
                <div class="header-button">
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image">
                        <img src="../assets/images/bg-4.png" alt="José Cage" />
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#">Dom Chocas</a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image">
                            <a href="#">
                              <img
                                src="../assets/img/profile/foto.jpg"
                                alt="José Cage"
                              />
                            </a>
                          </div>
                          <div class="content">
                            <h5 class="name">
                              <a href="#">José Cage</a>
                            </h5>
                            <span class="email">josecage@gmail.com</span>
                          </div>
                        </div>
                        <div class="account-dropdown__body">
                          <div class="account-dropdown__item">
                            <a href="perfil.html">
                              <i class="zmdi zmdi-settings"></i>Perfil</a
                            >
                          </div>
                        </div>
                        <div class="account-dropdown__footer">
                          <a href="#"> <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="banner-dashboard" style=""></div>
          <div
            class="section__content section__content--p30"
            style="margin-top: -100px"
          >
            <div class="container-fluid">
              <div class="row mt-4">
                <div
                  class="col-lg-12 col-lg-12 col-sm-12"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >
                  <div class="rounded p-4 borda-top">
                    <h1 class="title">Tabela de Clientes</h1>
                    <hr />
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Telefone</th>
                          <th>Morada</th>
                          <th class="text-center">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Teste 01</td>
                          <td>Teste 01</td>
                          <td>Teste 01</td>
                          <td>Teste 01</td>
                          <td class="text-center">
                            <a
                              href="ver-estabelecimento.html"
                              class="btn-sm btn-success"
                              >ver</a
                            >
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Footer -->
     <?php require 'includes/footer.php'; ?>
    <!-- Footer -->
  </body>
</html>
<!-- end document-->
