
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
        <div class="main-content">
          <div class="banner-dashboard" style=""></div>
          <div
            class="section__content section__content--p30"
            style="margin-top: -100px"
          >

            <div class="container-fluid">
              <div class="row mt-4">
                <div class="col-lg-4 col-sm-12 col-xl-4"  
                  data-aos="fade-right"
                  data-aos-duration="2300">

                  <?php 
                      // Pegando os dados do administrador 
                      $parametros = [":id" => $_GET['id']];
                      $adminSelected = new Model();
                      $searchData = $adminSelected->EXE_QUERY("SELECT * FROM tb_cliente WHERE id_cliente=:id", $parametros);
                      if(count($searchData)): 
                        foreach($searchData as $mostrar):
                          $nome = $mostrar['nome_cliente'];
                          $foto = $mostrar['foto_cliente'];
                          $email = $mostrar['email_cliente'];
                          $bi = $mostrar['num_bi'];
                          $idade = $mostrar['idade'];
                          $tel = $mostrar['tel_cliente'];
                          $genero = $mostrar['genero'] === "M" ? "Masculino": "Feminino";
                        endforeach;
                      endif;
                    ?>

                  <div class="rounded p-4 borda-top" style="">
                    <div style="margin: 0 auto; text-align: center; ">
                      <img src="../assets/images/profile/<?= $foto ?>" alt="" style="border-radius: 50%; width: 100px; height: 100px;">
                    </div>
                    <div class="text-center mt-3">
                     <span><strong><?= $nome ?></strong></span>
                    </div>
                  </div>

                  <div class="rounded p-4 borda-top mt-2 text-center" style="">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-12">
                            E-mail <br>
                            <strong><?= $email ?></strong>
                          </div>
                          <div class="col-lg-12 border-top">
                            Nº de Identificação <br>
                            <strong><?= $bi ?></strong>
                          </div>
                          <div class="col-lg-12 border-top">
                            Idade <br>
                            <strong><?= $idade ?></strong>
                          </div>
                          <div class="col-lg-12 border-top">
                            Contacto <br>
                            <strong><?= $tel ?></strong>
                          </div>
                          <div class="col-lg-12 border-top">
                            Genero <br>
                            <strong><?= $genero ?></strong>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="col-lg-8 col-xl-8 col-sm-12"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >
                  <div class="card p-4">
                    <div class="row">
                      <div class="col-lg-12">
                        <h2 class="h5">Dados relacionados</h2>
                        <hr>
                        <div class="table-responsive">
                          <table class="table" id="dataTableEstacionamento">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Marca</th>
                                <th>Cor</th>
                                <th>Modelo</th>
                                <th>Matricula</th>
                                <th>Data registro</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                              $parametros = [":id" => $_GET['id']];
                              $carroSelect = new Model();
                              $carroCliente = $carroSelect->EXE_QUERY("SELECT * FROM tb_carro_cliente WHERE id_cliente=:id", $parametros);
                              if($carroCliente):
                                foreach($carroCliente as $mostrar):
                            ?>
                              <tr>
                                <td><?= $mostrar['id_carro'] ?></td>
                                <td><?= $mostrar['marca'] ?></td>
                                <td><?= $mostrar['cor'] ?></td>
                                <td><?= $mostrar['modelo'] ?></td>
                                <td><?= $mostrar['matricula'] ?></td>
                                <td><?= $mostrar['data_registro_carro'] ?></td>
                              </tr>
                            <?php
                              endforeach;
                            else:
                            ?>  
                              <tr>
                                <td colspan="12" class="bg-warning text-center text-white">Não existe nenhum dado</td>
                              </tr>

                            <?php endif;?>
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
    </div>

    <!-- Footer -->
    <?php require 'includes/footer.php'; ?>
    <!-- Footer -->
  </body>
</html>
<!-- end document-->

