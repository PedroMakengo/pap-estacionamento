
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
                  class="col-md-4 col-lg-4"
                  data-aos="fade-down"
                  data-aos-duration="500"
                >
                  <div class="rounded p-4 borda-top">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="borda-icons shadow">
                          <i class="fas fa-database"></i>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <h3>40,2019$</h3>
                        <span>Databases</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="col-md-4 col-lg-4"
                  data-aos="fade-down"
                  data-aos-duration="800"
                >
                  <div class="rounded p-4 borda-top">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="borda-icons shadow">
                          <i class="fas fa-anchor"></i>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <h3>40,2019$</h3>
                        <span>Providers</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="col-md-4 col-lg-4"
                  data-aos="fade-down"
                  data-aos-duration="1200"
                >
                  <div class="rounded p-4 borda-top">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="borda-icons shadow">
                          <i class="fas fa-align-right"></i>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <h3>40,2019$</h3>
                        <span>Schedules</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-4">
                <div
                  class="col-lg-8 col-lg-8 col-sm-12"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >
                  <div class="rounded p-4 borda-top">
                    <h1 class="title">Dados estátisticos</h1>
                    <hr />
                    <div class="charts mt-2">
                      <canvas
                        id="mycompra-chart"
                        style="height: 250px"
                      ></canvas>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-xl-4 col-sm-12"
                  data-aos="fade-right"
                  data-aos-duration="2600"
                >
                  <div class="borda-top rounded p-4 bg-white">
                    <h1 class="title">Provedores</h1>
                    <hr />
                    <div class="row provedores">
                      <div class="col-lg-12">
                        <table class="table">
                          <thead class="bg-admin">
                            <tr>
                              <th class="text-white">Type</th>
                              <th class="text-white">Provedor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Online</td>
                              <td>3</td>
                            </tr>
                            <tr>
                              <td>Founder & CEO</td>
                              <td>32</td>
                            </tr>
                            <tr>
                              <td>Marco Botton</td>
                              <td>13</td>
                            </tr>
                            <tr>
                              <td>Marco Botton</td>
                              <td>13</td>
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
