
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
                        <p>Adicionar o meu carro</p>
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
                              <a href="registrar-carro.php?action=delete&id=<?= $mostrar['id_carro']?>" class="btn btn-danger btn-sm">
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

                    <!-- Eliminar meu carro -->
                    <?php
                      if (isset($_GET['action']) && $_GET['action'] == 'delete'):
                          $id = $_GET['id'];
                          $parametros  =[
                              ":id"=>$id
                          ];
                          $delete = new Model();
                          $delete->EXE_NON_QUERY("DELETE FROM tb_carro_cliente WHERE id_carro=:id", $parametros);
                          if($delete == true):
                              echo "<script>window.alert('Apagado com sucesso');</script>";
                              echo "<script>location.href='registrar-carro.php?id=carro'</script>";
                          else:
                              echo "<script>window.alert('Operação falhou');</script>";
                          endif;
                      endif;
                      ?>
                    <!-- Eliminar meu carro -->
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
          <div class="modal-body">
            <form method="POST">
              <div class="row">
                <div class="form-group col-lg-4">
                  <label for="">Marca</label>
                  <input type="text" name="marca" placeholder="Insira a marca do carro" class="form-control" />
                </div>
                <div class="form-group col-lg-4">
                  <label for="">Cor</label>
                  <input type="text" name="cor" placeholder="Insira a cor do carro" class="form-control" />
                </div>
                <div class="form-group col-lg-4">
                  <label for="">Modelo</label>
                  <input type="text" name="modelo" placeholder="Insira o modelo do carro" class="form-control" />
                </div>
                <div class="form-group col-lg-12">
                  <label for="">Matricula</label>
                  <input type="text" name="matricula" placeholder="Insira a matricula do carro" class="form-control" />
                </div>
                <div class="form-group col-lg-3">
                  <input type="submit" name="registraCarro" class="btn btn-primary" value="Registrar carro" />
                </div>
              </div>
            </form>

            <?php 

              if(isset($_POST['registraCarro'])):
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $matricula = $_POST['matricula'];
                $cor       = $_POST['cor']; 

                $parametros = [
                  ":id"   => $_SESSION['id'],
                  ":marca" => $marca, 
                  ":cor"   => $cor, 
                  ":modelo" => $modelo, 
                  ":matricula" => $matricula
                ];

                $inserir = new Model();
                $inserir->EXE_NON_QUERY("INSERT INTO tb_carro_cliente 
                (id_cliente, marca, cor, modelo, matricula, data_registro_carro) 
                VALUES (:id, :marca, :cor, :modelo, :matricula, now()) ", $parametros);
                if($inserir):
                  echo "<script>location.href='registrar-carro.php?id=carro'</script>";
                endif;
              endif;
            ?>
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
