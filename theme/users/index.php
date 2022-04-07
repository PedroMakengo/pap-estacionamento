
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
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <!-- Tabela de Entrada e Saída -->
                        <div class="rounded p-4 card">
                          <table class="table mt-4">
                            <thead>
                              <tr>
                                <th>Item 0</th>
                                <th>Item 1</th>
                                <th>Item 2</th>
                                <th>Item 3</th>
                                <th>Item 4</th>
                                <th>Item 5</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Item 0</td>
                                <td>Item 1</td>
                                <td>Item 2</td>
                                <td>Item 3</td>
                                <td>Item 4</td>
                                <td>Item 5</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- End Tabela Entrada e Saída -->
                      </div>
                      <div class="tab-pane fade" id="nav-vagasDisponiveis" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="rounded p-4 card">
                          <table class="table mt-4">
                            <thead>
                              <tr>
                                <th>Item 0</th>
                                <th>Item 1</th>
                                <th>Item 2</th>
                                <th>Item 3</th>
                                <th>Item 4</th>
                                <th>Item 5</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Item 0</td>
                                <td>
                                  <a href="cadastro.php?id=vaga">Vaga Selecionada</a>
                                </td>
                                <td>Item 2</td>
                                <td>Item 3</td>
                                <td>Item 4</td>
                                <td>Item 5</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-vagasSolicitadas" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="rounded p-4 card">
                          <table class="table mt-4">
                            <thead>
                              <tr>
                                <th>Item 0</th>
                                <th>Item 1</th>
                                <th>Item 2</th>
                                <th>Item 3</th>
                                <th>Item 4</th>
                                <th>Item 5</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Item 0</td>
                                <td>
                                  Vaga Solicitada
                                </td>
                                <td>Item 2</td>
                                <td>Item 3</td>
                                <td>Item 4</td>
                                <td>Item 5</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-funcionamento" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="card p-4">
                          <h6>Modo de funcionamento do sistema</h6>
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
  <?php require 'includes/footer.php' ?>
  <!-- Footer -->
  </body>
</html>
<!-- end document-->


