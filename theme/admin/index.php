
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
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <h3>
                          <?php 
                            $contabilizandoClientes = new Model();
                            $contar = $contabilizandoClientes->EXE_QUERY("SELECT * FROM tb_cliente"); 
                            echo count($contar);
                          ?>
                        </h3>
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
                          <i class="fas fa-database"></i>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <h3>
                        <?php 
                            $contabilizandoVagas = new Model();
                            $contar = $contabilizandoVagas->EXE_QUERY("SELECT * FROM tb_solicitacao_vaga"); 
                            echo count($contar);
                          ?>
                        </h3>
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
                          <i class="fas fa-car"></i>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <h3>
                          <?php 
                            $contabilizandoCarros = new Model();
                            $contar = $contabilizandoCarros->EXE_QUERY("SELECT * FROM tb_carro_cliente"); 
                            echo count($contar);
                          ?>
                        </h3>
                        <span>Total de Carros</span>
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
                    <h1 class="title">Gráfico Mensal de Clientes</h1>
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
                    <h1 class="title pb-3">Clientes</h1>
                    <div class="row provedores">
                      <div class="col-lg-12">
                        <table class="table">
                          <thead class="bg-admin">
                            <tr>
                              <th>#</th>
                              <th>Nº BI</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 

                              $buscandoAlgunsClientes = new Model();
                              $buscandoClientes = $buscandoAlgunsClientes->EXE_QUERY("SELECT * FROM tb_cliente LIMIT 5");
                              if(count($buscandoClientes)):
                                foreach($buscandoClientes as $mostrarCliente):
                            ?>
                            <tr>
                              <td><?= $mostrarCliente['id_cliente'] ?></td>
                              <td><a href="perfil-cliente.php?id=<?= $mostrarCliente['id_cliente'] ?>"><?= $mostrarCliente['num_bi'] ?></a></td>
                            </tr>
                            <?php 
                                endforeach;
                              else:?>
                              <tr>
                                <td colspan="2" class="bg-warning text-white">Não existe ainda nenhum cliente</td>
                              </tr>
                            <?php 
                              endif;?>
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
