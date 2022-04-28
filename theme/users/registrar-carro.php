
  <!-- Head -->
  <?php require 'includes/head.php' ?>
  <!-- Head -->

  <body class="animsition">
    <div class="page-wrapper">
      <!-- Header -->
      <?php require 'includes/header.php'; ?> 
      <!-- Header -->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="banner-dashboard"></div>
          <div
            class="section__content section__content--p30"
            style="margin-top: -100px"
          >
            <div class="container-fluid">
              <div class="row mt-4">
                <div class="col-lg-12 col-xl-12">
                  <div class="card p-4 ">
                    <div class="row">
                      <div class="col-lg-6">
                        <p>Adicionar um carro</p>
                      </div>
                      <div class="col-lg-6 text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target=".adicionarCarroModal">Adicionar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-12 col-xl-12 col-sm-12 mt-1"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >
                  <div class="rounded p-4 card">
                    <h1 class="title">Listagem de carro</h1>
                    <hr>
                    <table class="table mt-4" id="dataTableGeral">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Marca</th>
                          <th>Modelo</th>
                          <th>Cor</th>
                          <th>Matricula</th>
                          <th>Data Registro</th>
                          <th class="text-center">Acções</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                          $parametros = [":id" => $_SESSION['id']];
                          $buscandoCarro = new Model();
                          $buscandoMeuCarro = $buscandoCarro->EXE_QUERY("SELECT * FROM tb_carro_cliente WHERE id_cliente=:id", $parametros);
                          if($buscandoMeuCarro):
                            foreach($buscandoMeuCarro as $mostrar):?>
                          <tr>
                            <td><?= $mostrar['id_carro'] ?></td>
                            <td><?= $mostrar['marca'] ?></td>
                            <td><?= $mostrar['modelo'] ?></td>
                            <td><?= $mostrar['cor'] ?></td>
                            <td><?= $mostrar['matricula'] ?></td>
                            <td><?= $mostrar['data_registro_carro'] ?></td>
                            <td class="text-center">
                              <a href="#" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                              </a>
                            </td>
                          </tr>
                        <?php
                          endforeach;
                        else:?>
                          <tr>
                            <td colspan="12" class="bg-warning text-center text-white">Não existe nenhum carro</td>
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


    <div class="modal fade adicionarCarroModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar meu carro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php require 'includes/footer.php' ?>
    <!-- Footer -->
  </body>
</html>
<!-- end document-->
