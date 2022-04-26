
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

                  <div class="bg-white p-3">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Registro de vagas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Entrada de Carro</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Saída de Carro</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#solicitacao" role="tab" aria-controls="contact" aria-selected="false">Solicitação de vagas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#carros" role="tab" aria-controls="contact" aria-selected="false">Carros registrados</a>
                        </li>
                      </ul>
                      <div class="tab-content mt-4" id="myTabContent">

                        <!-- Registro de vagas -->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="p-2">
                            <div class="row">
                              <div class="col-lg-6">
                                  <button class="btn btn-primary" data-toggle="modal" data-target=".adicionar_vaga">
                                    <i class="fas fa-plus"></i> Adicionar vaga
                                  </button>
                                  <a href="relatorio.php?id=vaga" class="btn btn-primary">
                                    <i class="fas fa-file"></i> Visualizar relatório
                                  </a>
                              </div>
                            </div>
                          </div>

                          <div class="p-2 mt-2">
                            <div class="table-responsive">
                              <table class="table datableGeral" >
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Espaço</th>
                                    <th>Preço</th>
                                    <th>Descrição</th>
                                    <th class="text-center">Acções</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $registroVagas = new Model();
                                      $buscandoVagas = $registroVagas->EXE_QUERY("SELECT * FROM tb_vaga");
                                      if($buscandoVagas):
                                        foreach($buscandoVagas as $mostrar):?>
                                        <tr>
                                          <td><?= $mostrar['id_vaga'] ?></td>
                                          <td><?= $mostrar['espaco_vago'] ?></td>
                                          <td><?= $mostrar['preco'] ?></td>
                                          <td><?= $mostrar['descricao'] ?></td>
                                          <td class="text-center">
                                            <a href="#" class="btn btn-primary btn-sm">
                                              <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                              <i class="fas fa-trash"></i>
                                            </a>
                                          </td>
                                        </tr>
                                    <?php
                                        endforeach;
                                      endif;
                                    ?>
                                </tbody>
                              </table>
                            </div>
                          </div>

                        </div>
                        <!-- Registro de vagas -->

                        <!-- Entrada carro -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="p-2">
                            <div class="row">
                              <div class="col-lg-6">
                                  <button class="btn btn-primary" data-toggle="modal" data-target=".adicionar_carro_estacionar">
                                    <i class="fas fa-plus"></i> Registrar carro
                                  </button>
                                  <a href="relatorio.php?id=entrada" class="btn btn-primary">
                                    <i class="fas fa-file"></i> Visualizar relatório
                                  </a>
                              </div>
                            </div>
                          </div>

                          <div class="p-2 mt-2">
                            <!-- End Tabela Estacionar -->
                            <div class="table-responsive">
                              <table class="table datableGeral"  style="width: 1500px">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>B.I</th>
                                    <th>Modelo do Carro</th>
                                    <th>Cor</th>
                                    <th>Matricula</th>
                                    <th>Data de Entrada</th>
                                    <th class="text-center">Acções</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $buscandoEntradaCarro = new Model();
                                      $busca = $buscandoEntradaCarro->EXE_QUERY("SELECT * FROM tb_estacionar_carro WHERE estado=0");
                                      if($busca):
                                        foreach ($busca as $mostrar):
                                    ?>
                                      <tr>
                                        <td><?= $mostrar['id_estacionar'] ?></td>
                                        <td><?= $mostrar['nome_cliente'] ?></td>
                                        <td><?= $mostrar['bi'] ?></td>
                                        <td><?= $mostrar['modelo'] ?></td>
                                        <td><?= $mostrar['cor'] ?></td>
                                        <td><?= $mostrar['matricula'] ?></td>
                                        <td><?= $mostrar['data_entrada'] ?></td>
                                        <td class="text-center">
                                         <form method="POST">
                                            <button type="submit" name="atualizar_saida" class="btn btn-sm btn-primary">
                                              <i class="fas fa-check"></i>
                                            </button>
                                            <a href="#" class="btn btn-sm btn-danger">
                                              <i class="fas fa-trash"></i>
                                            </a>
                                            <?php 
                                              if(isset($_POST['atualizar_saida'])):

                                                $parametros = [
                                                  ":id" => $mostrar['id_estacionar'],
                                                  ":estado" => 1
                                                ];

                                                $atualizar = new Model();
                                                $atualizar->EXE_NON_QUERY("UPDATE tb_estacionar_carro SET
                                                estado=:estado,
                                                data_saida=now() 
                                                WHERE
                                                id_estacionar=:id ", $parametros);
                                                if($atualizar):
                                                  echo "<script>location.href='registro.php?id=registro'</script>";
                                                endif;
                                              endif;
                                            ?>
                                         </form>
                                         
                                        </td>
                                      </tr>
                                    <?php
                                      endforeach;
                                    else:?>
                                        <tr>
                                          <td colspan="12" class="text-center bg-warning text-white">Não existe nenhuma entrada de carro</td>
                                        </tr>
                                    <?php 
                                    endif;
                                    ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <!-- End Tabela Estacionar -->

                        </div>
                        <!-- Entrada carro -->

                        <!-- Saída de Carro -->
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="p-2">
                              <div class="row">
                                <div class="col-lg-6">
                                    <a href="relatorio.php?id=saida" class="btn btn-primary">
                                      <i class="fas fa-file"></i> Visualizar relatório
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="p-2 mt-2">
                              <!-- End Tabela Estacionar -->
                              <div class="table-responsive">
                                <table class="table" id="dataTableCarroSaida" style="width: 1500px">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Nome</th>
                                      <th>B.I</th>
                                      <th>Modelo do Carro</th>
                                      <th>Cor</th>
                                      <th>Matricula</th>
                                      <th>Data de Saída</th>
                                      <th class="text-center">Acções</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $buscandoEntradaCarro = new Model();
                                        $busca = $buscandoEntradaCarro->EXE_QUERY("SELECT * FROM tb_estacionar_carro
                                        WHERE estado=1");
                                        if($busca):
                                          foreach ($busca as $mostrar):
                                      ?>
                                        <tr>
                                          <td><?= $mostrar['id_estacionar'] ?></td>
                                          <td><?= $mostrar['nome_cliente'] ?></td>
                                          <td><?= $mostrar['bi'] ?></td>
                                          <td><?= $mostrar['modelo'] ?></td>
                                          <td><?= $mostrar['cor'] ?></td>
                                          <td><?= $mostrar['matricula'] ?></td>
                                          <td><?= $mostrar['data_saida'] ?></td>
                                          <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary">
                                              <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                              <i class="fas fa-trash"></i>
                                            </a>
                                          </td>
                                        </tr>
                                      <?php
                                        endforeach;
                                      else:
                                        ?>
                                        <tr>
                                          <td colspan="12" class="text-center bg-warning text-white">Não existe nenhuma saída</td>
                                        </tr>
                                        <?php
                                      endif;
                                      ?>
                                  </tbody>
                                </table>
                              </div>
                              <!-- End Tabela Estacionar -->
                            </div>
                        </div>
                        <!-- Saída de Carro -->

                        <!-- Solicitação de Vagas -->
                        <div class="tab-pane fade" id="solicitacao" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="p-2">
                              <div class="row">
                                <div class="col-lg-6">
                                    <a href="relatorio.php?id=solicitacoes" class="btn btn-primary">
                                      <i class="fas fa-file"></i> Visualizar relatório
                                    </a>
                                </div>
                              </div>
                            </div>

                            <div class="p-2 mt-2">
                              <!-- End Tabela Estacionar -->
                              <div class="table-responsive">
                                <table class="table" id="tableSolicitacao" style="width: 1500px">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Nome do Cliente</th>
                                      <th>Vaga</th>
                                      <th>Estado Solicitação</th>
                                      <th>Data de Solicitação</th>
                                      <th class="text-center">Acções</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $buscandoEntradaCarro = new Model();
                                        $busca = $buscandoEntradaCarro->EXE_QUERY("SELECT * FROM tb_solicitacao_vaga
                                        INNER JOIN tb_vaga ON tb_solicitacao_vaga.id_vaga=tb_vaga.id_vaga
                                        INNER JOIN tb_cliente ON tb_solicitacao_vaga.id_cliente=tb_cliente.id_cliente
                                        ");
                                        if($busca):
                                          foreach ($busca as $mostrar):
                                      ?>
                                        <tr>
                                          <td><?= $mostrar['id_solicitacao_vaga'] ?></td>
                                          <td><?= $mostrar['nome_cliente'] ?></td>
                                          <td><?= $mostrar['espaco_vago'] ?></td>
                                          <td><?= $mostrar['estado_solicitacao'] ?></td>
                                          <td><?= $mostrar['data_solicitacao'] ?></td>
                                          <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary">
                                              <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                              <i class="fas fa-trash"></i>
                                            </a>
                                          </td>
                                        </tr>
                                      <?php
                                        endforeach;
                                      else:
                                        ?>
                                        <tr>
                                          <td colspan="12" class="text-center bg-warning text-white">Não existe nenhuma saída</td>
                                        </tr>
                                        <?php
                                      endif;
                                      ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                        <!-- Solicitação de Vagas -->

                        <!-- Carros registrados -->
                        <div class="tab-pane fade" id="carros" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="p-2">
                              <div class="row">
                                <div class="col-lg-6">
                                    <a href="relatorio.php?id=carros" class="btn btn-primary">
                                      <i class="fas fa-file"></i> Visualizar relatório
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="p-2">
                              <!-- Entrada de Carro -->
                              <div class="table-responsive">
                                <table class="table" id="dataTableCarroRegistrado">
                                  <thead>
                                    <tr>
                                      <th>Id</th>
                                      <th>Dono do Carro</th>
                                      <th>Marca</th>
                                      <th>Modelo</th>
                                      <th>Matricula</th>
                                      <th>Data Reistro</th>
                                      <th class="text-center">Ações</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php 
                                      $registroCarro = new Model();
                                      $buscandoCarro = $registroCarro->EXE_QUERY("SELECT * FROM tb_carro_cliente
                                      INNER JOIN tb_cliente ON tb_carro_cliente.id_cliente=tb_cliente.id_cliente");
                                      if(count($buscandoCarro)):
                                        foreach($buscandoCarro as $carro):?>
                                          <tr>
                                            <td><?= $carro['id_carro'] ?></td>
                                            <td><?= $carro['nome_cliente'] ?></td>
                                            <td><?= $carro['marca'] ?></td>
                                            <td><?= $carro['modelo'] ?></td>
                                            <td><?= $carro['matricula'] ?></td>
                                            <td><?= $carro['data_registro_carro'] ?></td>
                                            <td class="text-center">
                                              <a href="" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                              </a>
                                            </td>
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
                              <!-- Entrada de Carro -->
                            </div>
                        </div>
                        <!-- Carros registrados -->
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- MODAL VAGAS -->
        <div class="modal fade adicionar_vaga" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar vaga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <label for="espaco">Espaço  <span class="text-danger">*</span></label>
                      <input type="text" placeholder="Insira o espaço" id="espaco" name="espaco" class="form-control">
                    </div>
                    <div class="col-lg-6 form-group">
                      <label for="preco">Preço <span class="text-danger">*</span></label>
                      <input type="number" placeholder="Insira o preço" id="preco" name="preco" class="form-control">
                    </div>
                    <div class="col-lg-12 form-group">
                      <label for="descricao">Descrição</label>
                      <textarea name="descricao" placeholder="Deixe uma informação" id="descricao" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-lg-4">
                      <input type="submit" value="Adicionar" name="adicionar_vaga" class="btn btn-primary rounded form-control">
                    </div>
                  </div>
                </form>

                <?php

                  if(isset($_POST['adicionar_vaga'])):

                    $espaco = $_POST['espaco'];
                    $preco  = $_POST['preco'];
                    $descricao = $_POST['descricao'];

                    $parametros = [
                      ":id"         => $_SESSION['id_admin'],
                      ":espaco"     => $espaco,
                      ":preco"      => $preco,
                      ":descricao"  => $descricao
                    ];

                    $inserirVaga = new Model();
                    $inserirVaga->EXE_NON_QUERY("INSERT INTO tb_vaga 
                    (id_admin, espaco_vago, preco, descricao) 
                    VALUES 
                    (:id, :espaco, :preco, :descricao) ", $parametros);
                    if($inserirVaga):
                      echo "<script>location.href='registro.php?id=registro'</script>";
                    endif;
                  endif;
                ?>
              </div>
            </div>
          </div>
        </div>
        <!-- END MODAL VAGAS -->


        <!-- MODAL ESTACIONAR -->
        <div class="modal fade adicionar_carro_estacionar" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar carro no estacionamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <div class="row">
                    <div class="col-lg-4 form-group">
                      <label for="nome">Nome Completo  <span class="text-danger">*</span></label>
                      <input type="text" placeholder="Cliente" id="nome" name="nome" class="form-control">
                    </div>
                    <div class="col-lg-4 form-group">
                      <label for="espaco">Bilhete de Identidade  <span class="text-danger">*</span></label>
                      <input type="text" placeholder="Bilhete de Identidade" id="bilhete" name="bi" class="form-control">
                    </div>
                    <div class="col-lg-4 form-group">
                      <label for="espaco">Modelo do Carro  <span class="text-danger">*</span></label>
                      <input type="text" placeholder="Insira o Modelo do Carro" id="modelo" name="modelo" class="form-control">
                    </div>
                    <div class="col-lg-4 form-group">
                      <label for="espaco">Cor do Carro  <span class="text-danger">*</span></label>
                      <input type="text" placeholder="Insira a Cor do Carro" id="cor" name="cor" class="form-control">
                    </div>
                    <div class="col-lg-4 form-group">
                      <label for="preco">Matricula <span class="text-danger">*</span></label>
                      <input type="text" placeholder="Insira a Matricula" id="matricula" name="matricula" class="form-control">
                    </div>
                    <div class="col-lg-4 form-group">
                      <label for="preco">Data de Entrada <span class="text-danger">*</span></label>
                      <input type="text" disabled value="<?= Date('Y-m-d H:i:s')?>" placeholder="Insira a Matricula" id="data" name="dataEntrada" class="form-control">
                    </div>
                    <div class="form-group col-lg-3">
                      <input type="submit" value="Adicionar" name="adicionar_carro_estacionado" class="btn btn-primary rounded form-control">
                    </div>
                  </div>
                </form>

                <?php

                  if(isset($_POST['adicionar_carro_estacionado'])):
                    $nome      = $_POST['nome'];
                    $bi        = $_POST['bi'];
                    $modelo    = $_POST['modelo'];
                    $cor       = $_POST['cor'];
                    $date      = $_POST['dataEntrada'];
                    $matricula = $_POST['matricula'];

                    $parametros = [
                      ":id"             => $_SESSION['id_admin'],
                      ":nome"           => $nome,
                      ":bi"             => $bi,
                      ":modelo"         => $modelo,
                      ":cor"            => $cor,
                      ":matricula"      => $matricula,
                    ];

                    $inserirCarro = new Model();
                    $inserirCarro->EXE_NON_QUERY("INSERT INTO tb_estacionar_carro 
                    (id_admin, nome_cliente, bi, modelo, cor, matricula, data_entrada, data_saida, estado, data_registro_estacionar) 
                    VALUES (:id, :nome, :bi, :modelo, :cor, :matricula, now(), now(), 0, now())", $parametros);

                    if($inserirCarro):
                      echo "<script>location.href='registro.php?id=registro'</script>";
                    endif;
                  endif;
                ?>
              </div>
            </div>
          </div>
        </div>
        <!-- END ESTACIONAR MODAL -->
        
      </div>
    </div>

    <!-- Footer -->
    <?php require 'includes/footer.php'; ?>
    <!-- Footer -->
  </body>
</html>
<!-- end document-->

