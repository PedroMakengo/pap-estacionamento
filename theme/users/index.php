
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
                  <div class="p-4 card">
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Entrada & Saída</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-vagasDisponiveis" role="tab" aria-controls="nav-profile" aria-selected="false">Vagas Disponíveis</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-vagasSolicitadas" role="tab" aria-controls="nav-profile" aria-selected="false">Minhas solicitações</a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-funcionamento" role="tab" aria-controls="nav-contact" aria-selected="false">Funcionamento</a>
                        </div>
                    </nav>
                  </div>
                </div>
                <div
                  class="col-lg-12 col-lg-12 col-sm-12 mt-1"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >

                  <div class="tab-content" id="nav-tabContent">
                      <!-- Entrada e Saída -->
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <!-- Tabela de Entrada e Saída -->
                        <div class="rounded p-4 card" >
                          <div id="table-responsive">
                            <table class="table mt-4">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Modelo</th>
                                  <th>Data de Entrada</th>
                                  <th>Data de Saída</th>
                                  <th>Data de registro</th>
                                  <th>Estado</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 

                                  $parametros = [":id" => $_SESSION['id']];
                                  $buscandoEntradaSaida = new Model();
                                  $buscando = $buscandoEntradaSaida->EXE_QUERY("SELECT * FROM tb_entrada_saida 
                                  INNER JOIN tb_carro_cliente ON tb_entrada_saida.id_carro=tb_carro_cliente.id_carro 
                                  WHERE tb_carro_cliente.id_cliente=:id", $parametros);

                                  if(count($buscando)):
                                    foreach($buscando as $mostrar):?>
                                      <tr>
                                        <td><?= $mostrar['id_entrada'] ?></td>
                                        <td><?= $mostrar['modelo'] ?></td>
                                        <td><?= $mostrar['data_entrada'] ?></td>
                                        <td><?= $mostrar['data_saida'] ?></td>
                                        <td><?= $mostrar['data_registro'] ?></td>
                                        <td><?= $mostrar['estado'] === "0" ? '<span class="text-warning">Entrada</span>' : '<span class="text-success">Saída</span>' ?></td>
                                      </tr>
                                      <?php 
                                      endforeach;
                                    else:    
                                  ?>
                                      <tr>
                                        <td colspan="12" class="bg-warning text-center text-white">Não existe nenhum dado</td>
                                      </tr>
                                  <?php 
                                    endif; 
                                  ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- End Tabela Entrada e Saída -->
                      </div>
                      <!-- Entrada e Saída -->

                      <!-- Vagas Disponíveis -->
                      <div class="tab-pane fade" id="nav-vagasDisponiveis" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="rounded p-4 card">
                          <div class="table-responsive">
                            <table class="table mt-4" id="dataTableGeral">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Espaço</th>
                                  <th>Preço</th>
                                  <th>Descrição</th>
                                  <th class="text-center">Acção</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $vagasDisponivel = new Model();
                                  $buscandoDisponivel = $vagasDisponivel->EXE_QUERY("SELECT * FROM tb_vaga");
                                  if(count($buscandoDisponivel)):
                                    foreach($buscandoDisponivel as $mostrar): ?>
                                      <tr>
                                        <td><?= $mostrar['id_vaga'] ?></td>
                                        <td><?= $mostrar['espaco_vago'] ?></td>
                                        <td><?= $mostrar['preco'] ?></td>
                                        <td><?= $mostrar['descricao'] ?></td>
                                        <td class="text-center">
                                          <?php 
                                            $parametros = [
                                              ":idVaga"     => $mostrar['id_vaga'],
                                              ":id"         => $_SESSION['id']
                                            ];
                                            $verificarCandidaturaVaga = new Model();
                                            $verificando = $verificarCandidaturaVaga->EXE_QUERY("SELECT * FROM tb_solicitacao_vaga WHERE id_vaga=:idVaga AND id_cliente=:id", $parametros);
                                            if($verificando):?>
                                              <button disabled class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                              </button>
                                            <?php 
                                            else:?>
                                              <a href="cadastro.php?id=<?= $mostrar['id_vaga'] ?>" class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                              </a>
                                            <?php 
                                            endif;?>
                                        </td>
                                      </tr>
                                  <?php
                                      endforeach;
                                    else:
                                  ?>
                                      <tr>
                                        <td colspan="12" class="text-white text-center bg-warning">Não existe nenhuma vaga disponível</td>
                                      </tr>
                                  <?php
                                    endif;
                                  ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- Vagas Disponíveis -->

                      <!-- Minhas Solicitações Disponíveis -->
                      <div class="tab-pane fade" id="nav-vagasSolicitadas" role="tabpanel" aria-labelledby="nav-profile-tab">
                      
                        <div class="rounded p-4 card">
                          <table class="table mt-4" id="dataTableEstacionamento">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Mensagem</th>
                                <th>Estado da solicitação</th>
                                <th>Data de registro</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                $parametros = [":id" => $_SESSION['id']];
                                $minhasSolicitacoes = new Model();
                                $buscandoSolicitacoes = $minhasSolicitacoes->EXE_QUERY("SELECT * FROM tb_solicitacao_vaga WHERE id_cliente=:id", $parametros);
                                
                                if(count($buscandoSolicitacoes)):
                                  foreach($buscandoSolicitacoes as $mostrar): ?>
                                    <tr>
                                      <td><?= $mostrar['id_solicitacao_vaga'] ?></td>
                                      <td><?= $mostrar['mensagem'] ?></td>
                                      <td><?= $mostrar['estado_solicitacao'] === "0" ? '<span class="text-danger">Por aprovar</span>' : '<span class="text-success">Aprovado</span>' ?></td>
                                      <td><?= $mostrar['data_solicitacao'] ?></td>
                                    </tr>
                                  <?php 
                                    endforeach;
                                  else:?>
                                    <tr>
                                      <td colspan="12" class="text-white bg-warning text-center">Não existe nenhuma informação </td>
                                    </tr>
                                <?php
                                endif;?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- Minhas Solicitações Disponíveis -->

                      <!-- Funcionamento -->
                      <div class="tab-pane fade" id="nav-funcionamento" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="accordion" id="accordionExample">
                            <div class="card border">
                              <div class="card-header bg-white border-0" id="headingOne">
                                <h2 class="mb-0 ">
                                  <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    O que é ?
                                  </button>
                                </h2>
                              </div>

                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>
                            <div class="card" style="margin-top: -20px">
                              <div class="card-header bg-white border-0" id="headingTwo">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Funcionamento do sistema
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Funcionamento -->

                    </div>
                </div>
              </div>
            </div>
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


