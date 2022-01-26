<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>System-Estans</title>

    <!-- Fontfaces CSS-->
    <link
      href="../assets/style/theme/font-face.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../assets/fonts/font-awesome-5/css/fontawesome-all.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Bootstrap CSS-->
    <link
      href="../assets/vendor/bootstrap-4.1/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Vendor CSS-->
    <link
      href="../assets/vendor/animsition/animsition.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link
      href="../assets/styles/theme/theme.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Animações -->
    <link rel="stylesheet" href="../assets/styles/theme/aos.css" />

    <link rel="stylesheet" href="../assets/styles/dashboard.css" />
  </head>

  <body class="animsition">
    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a class="logo" href="index.html">
                <img src="images/icon/logo.png" alt="CoolAdmin" />
              </a>
              <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
              <li>
                <a href="index.html">
                  <i class="fas fa-home"></i>Página Inicial</a
                >
              </li>
              <li>
                <a href="database.html">
                  <i class="fas fa-table"></i>Databases</a
                >
              </li>
              <li>
                <a href="providers.html">
                  <i class="far fa-check-square"></i>Providers</a
                >
              </li>
              <li>
                <a href="schedules.html">
                  <i class="fas fa-calendar-alt"></i>Schedules</a
                >
              </li>
              <li>
                <a href="../index.html">
                  <i class="fas fa-map-marker-alt"></i>Sair</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo dash-aside-bg">
          <a href="#" class="text-white"> System-Estans </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1 bg-user-estacionamento">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li class="active">
                <a href="index.html">
                  <i class="fas fa-home"></i>Página Inicial</a
                >
              </li>
              <li>
                <a href="cadastro.html">
                  <i class="fas fa-database"></i>Cadastro</a
                >
              </li>
              <li>
                <a href="entradas.html">
                  <i class="fab fa-superpowers"></i>Entradas</a
                >
              </li>
              <li>
                <a href="operacional.html">
                  <i class="fas fa-archive"></i>Operacional</a
                >
              </li>
              <li>
                <a href="../index.html">
                  <i class="fas fa-power-off"></i>Sair</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop bg-admin barra-menu">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap">
                <div class="form-header"></div>
                <div class="header-button">
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image">
                        <img src="../assets/images/bg-5.jpg" alt="José Cage" />
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#">José Cage</a>
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
                            <a href="profile.html">
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
          <div class="banner-dashboard"></div>
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
                    <h1 class="title">Dados estátisticos</h1>
                    <hr />
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Item 0</th>
                          <th>Item 1</th>
                          <th>Item 2</th>
                          <th>Item 3</th>
                          <th>Item 4</th>
                          <th>Item 5</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Item 0</td>
                          <td>Item 1</td>
                          <td>Item 2</td>
                          <td>Item 3</td>
                          <td>Item 4</td>
                          <td>Item 5</td>
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

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/vendor/animsition/animsition.min.js"></script>
    <!-- Main JS-->
    <script src="../assets/scripts/theme/main.js"></script>

    <script src="../assets/scripts/Chart.min.js"></script>
    <script src="../assets/scripts/chart.js"></script>

    <script src="../assets/scripts/theme/jquery-1.12.4.min.js"></script>
    <script src="../assets/scripts/theme/aos.js"></script>
    <script>
      $(function () {
        AOS.init();
      });
    </script>
  </body>
</html>
<!-- end document-->
