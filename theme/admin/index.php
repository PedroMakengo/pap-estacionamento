
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
        <!-- MAIN CONTENT-->
        <div class="main-content" >
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
                        <span>Total de Clientes</span>
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
                        <span>Vagas Solicitadas</span>
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
                        <span>Vagas Disponíveis</span>
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

    <!-- Footer -->
    <?php require 'includes/footer.php'; ?>
    <!-- Footer -->
  </body>
</html>
<!-- end document-->
