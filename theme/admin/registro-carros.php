
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
                <div
                  class="col-lg-12 col-lg-12 col-sm-12"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >
                  <div class="rounded p-4 borda-top">
                    <h1 class="title pb-3">Registo de carros</h1>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Carro</th>
                          <th>Marca</th>
                          <th>Entrada</th>
                          <th>Saída</th>
                          <th>Estado</th>
                          <th class="text-center">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $registroCarro = new Model();
                          $buscandoCarro = $registroCarro->EXE_QUERY("SELECT * FROM tb_entrada_saida 
                          INNER JOIN tb_carro_cliente ON tb_entrada_saida.id_carro=tb_carro_cliente.id_carro");
                          if(count($buscandoCarro)):
                            foreach($buscandoCarro as $carro):?>
                              <tr>
                                <td><?= $carro['id_entrada'] ?></td>
                                <td><?= $carro['modelo'] ?></td>
                                <td><?= $carro['marca'] ?></td>
                                <td><?= $carro['hora_entrada'] ?></td>
                                <td><?= $carro['hora_saida'] ?></td>
                                <td><?= $carro['estado'] ?></td>
                                <td class="text-center"s>Teste 01</td>
                              </tr>
                          <?php 
                            endforeach;
                          else:?>
                            <tr>
                              <td colspan="12" class="bg-warning text-white text-center">
                                Não existe nenhum registro de carro
                              </td>
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

    <!-- Footer -->
    <?php require 'includes/footer.php'; ?>
    <!-- Footer -->
  </body>
</html>
<!-- end document-->

