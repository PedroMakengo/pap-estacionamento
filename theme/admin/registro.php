
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
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Estacionar</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Entrada & Saída</a>
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
                                  <a href="relatorio.php?id=vaga" class="btn btn-primary" data-toggle="modal" data-target=".adicionar_vaga">
                                    <i class="fas fa-file"></i> Visualizar relatório
                                  </a>
                              </div>
                            </div>
                          </div>

                          <div class="p-2 mt-2">
                            <div class="table-responsive">
                              <table class="table" id="dataTableEstacionamento">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Text</th>
                                    <th>Obs</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                          </div>

                        </div>
                        <!-- Registro de vagas -->

                        <!-- Estacionar carro -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="p-2">
                            <div class="row">
                              <div class="col-lg-6">
                                  <button class="btn btn-primary" data-toggle="modal" data-target=".adicionar_carro_estacionar">
                                    <i class="fas fa-plus"></i> Registrar carro
                                  </button>
                                  <a href="relatorio.php?id=particular" class="btn btn-primary" data-toggle="modal" data-target=".adicionar_vaga">
                                    <i class="fas fa-file"></i> Visualizar relatório
                                  </a>
                              </div>
                            </div>
                          </div>

                          <div class="p-2 mt-2">
                          <!-- End Tabela Estacionar -->
                            <div class="table-responsive">
                              <table class="table" id="dataTableEstacionamento">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Text</th>
                                    <th>Obs</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                          </div>
                          <!-- End Tabela Estacionar -->

                        </div>
                        <!-- Estacionar carro -->




                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="p-2">
                              <div class="row">
                                <div class="col-lg-6">
                                    <a href="relatorio.php?id=entrada" class="btn btn-primary" data-toggle="modal" data-target=".adicionar_vaga">
                                      <i class="fas fa-file"></i> Visualizar relatório
                                    </a>
                                </div>
                              </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="solicitacao" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="p-2">
                              <div class="row">
                                <div class="col-lg-6">
                                    <a href="relatorio.php?id=solicitacoes" class="btn btn-primary" data-toggle="modal" data-target=".adicionar_vaga">
                                      <i class="fas fa-file"></i> Visualizar relatório
                                    </a>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="carros" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="p-2">
                              <div class="row">
                                <div class="col-lg-6">
                                    <a href="relatorio.php?id=carros" class="btn btn-primary" data-toggle="modal" data-target=".adicionar_vaga">
                                      <i class="fas fa-file"></i> Visualizar relatório
                                    </a>
                                </div>
                              </div>
                            </div>
                          <div class="table-responsive">
                            <table class="table" id="dataTableEstacionamento">
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
                <form action="">
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
                      <input type="submit" value="Adicionar" name="adicionar" class="btn btn-primary rounded form-control">
                    </div>
                  </div>
                </form>
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
                <form action="">
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
                      <input type="submit" value="Adicionar" name="adicionar" class="btn btn-primary rounded form-control">
                    </div>
                  </div>
                </form>
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

