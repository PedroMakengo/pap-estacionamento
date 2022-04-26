
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
                    <h1 class="title pb-3">Tabela de Clientes</h1>
                    <hr>
                    <div class="table-responsive">
                      <table class="table" id="dataGeral" style="width: 1120px">
                        <thead>
                          <tr>
                          <th>#</th>
                          <th>Nome</th>
                          <th>Bilhete de Identidade</th>
                          <th>Telefone</th>
                          <th>Genero</th>
                          <th>Data registro</th>
                          <th class="text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $buscandoAlgunsClientes = new Model();
                              $buscandoClientes = $buscandoAlgunsClientes->EXE_QUERY("SELECT * FROM tb_cliente");
                              if(count($buscandoClientes)):
                                foreach($buscandoClientes as $mostrarCliente):
                            ?>
                              <tr>
                                <td><?= $mostrarCliente['id_cliente'] ?></td>
                                <td><?= $mostrarCliente['nome_cliente'] ?></td>
                                <td><?= $mostrarCliente['num_bi'] ?></td>
                                <td><?= $mostrarCliente['tel_cliente'] ?></td>
                                <td><?= $mostrarCliente['genero'] ?></td>
                                <td><?= $mostrarCliente['data_registro_cliente'] ?></td>
                                <td>
                                  <a class="btn btn-primary btn-sm" href="perfil-usuario.php?id=<?= $mostrarCliente['id_cliente'] ?>">
                                    <i class="fas fa-eye"></i>
                                  </a>
                                  <a href="clientes.php?action=delete&id=<?= $mostrarCliente['id_cliente']?>" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                </td>
                              </tr>
                            <?php 
                              endforeach;
                            else:?>
                            <tr>
                              <td colspan="12" class="bg-warning text-white text-center">Não existe ainda nenhum cliente</td>
                            </tr>
                            <?php 
                            endif;?>
                        </tbody>
                      </table>

                      <!-- Eliminar usuário -->
                      <?php
                        if (isset($_GET['action']) && $_GET['action'] == 'delete'):
                            $id = $_GET['id'];
                            $parametros  =[
                                ":id"=>$id
                            ];
                            $delete = new Model();
                            $delete->EXE_NON_QUERY("DELETE FROM tb_cliente WHERE id_cliente=:id", $parametros);
                            if($delete == true):
                                echo "<script>window.alert('Apagado com sucesso');</script>";
                                echo "<script>location.href='clientes.php?id=clientes'</script>";
                            else:
                                echo "<script>window.alert('Operação falhou');</script>";
                            endif;
                        endif;
                        ?>
                      <!-- Eliminar usuário -->

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
