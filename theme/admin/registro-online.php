
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
                          <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#solicitacao" role="tab" aria-controls="contact" aria-selected="false">Solicitação de vagas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Entrada e Saída de Carro</a>
                        </li>
                      </ul>
                      <div class="tab-content mt-4" id="myTabContent">

                        <!-- Solicitação de Vagas -->
                        <div class="tab-pane fade show active" id="solicitacao" role="tabpanel" aria-labelledby="contact-tab">
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
                                <table class="table" id="solicitacaoTable">
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
                                          <td><?= $mostrar['estado_solicitacao'] === "0"  ? '<span class="text-danger">Por aprovar</span>' : '<span class="text-success">Aprovado</span>' ?></td>
                                          <td><?= $mostrar['data_solicitacao'] ?></td>
                                          <td class="text-center">
                                            <?php if($mostrar['estado_solicitacao'] === "0"): ?>
                                            <form method="POST">
                                              <button name="<?= $submeter = 'aceitar'.$mostrar['id_solicitacao_vaga'] ?>" class="btn btn-sm btn-primary">
                                                <i class="fas fa-thumbs-up"></i>
                                              </button>
                                              <?php
                                                if(isset($_POST[$submeter])):
                                                  $parametros = [
                                                    ":id" => $mostrar['id_solicitacao_vaga'],
                                                    ":estado" => 1
                                                  ];
                                                  $atualizarSolicitacao = new Model();
                                                  $atualizarSolicitacao->EXE_NON_QUERY("UPDATE tb_solicitacao_vaga SET
                                                  estado_solicitacao=:estado
                                                  WHERE id_solicitacao_vaga=:id", $parametros);

                                                  if($atualizarSolicitacao):
                                                    echo "<script>location.href='registro.php?id=registro'</script>";
                                                  endif;
                                                endif;?>
                                            </form>
                                            <?php else: ?>
                                             <form method="POST">
                                                <button name="<?= $negar = 'negar'.$mostrar['id_solicitacao_vaga'] ?>" class="btn btn-sm btn-primary" title="Solicitação Aprovada">
                                                  <i class="fas fa-thumbs-down"></i>
                                                </button>
                                                <a href="adicionar-entrada.php?id=<?= $mostrar['id_cliente'] ?>&id_solicitacao=<?= $mostrar['id_solicitacao_vaga'] ?>" 
                                                  title="Adicionar a entrada do carro no estacionamento" 
                                                  class="btn btn-sm btn-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <?php
                                                if(isset($_POST[$negar])):
                                                  $parametros = [
                                                    ":id" => $mostrar['id_solicitacao_vaga'],
                                                    ":estado" => 0
                                                  ];
                                                  $atualizarSolicitacao = new Model();
                                                  $atualizarSolicitacao->EXE_NON_QUERY("UPDATE tb_solicitacao_vaga SET
                                                  estado_solicitacao=:estado
                                                  WHERE id_solicitacao_vaga=:id", $parametros);

                                                  if($atualizarSolicitacao):
                                                    echo "<script>location.href='registro.php?id=registro'</script>";
                                                  endif;
                                                endif;?>
                                             </form>
                                            <?php endif; ?>
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

                         <!-- Entrada carro -->
                         <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="p-2">
                            <div class="row">
                              <div class="col-lg-6">
                                  <a href="relatorio.php?id=entrada" class="btn btn-primary">
                                    <i class="fas fa-file"></i> Visualizar relatório
                                  </a>
                              </div>
                            </div>
                          </div>

                          <div class="p-2 mt-2">
                            <!-- End Tabela Estacionar -->
                            <div class="table-responsive">
                              <table class="table" id="entradaCarro"  style="width: 1500px">
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

