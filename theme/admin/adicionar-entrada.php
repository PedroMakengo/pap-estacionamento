
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
                  <?php

                    $parametros = [":id" => $_GET['id'], ":idSolicitacao"=>$_GET['id_solicitacao']];
                    $buscandoSolicitacaoEntrada = new Model();
                    $buscandoSolicitada = $buscandoSolicitacaoEntrada->EXE_QUERY("SELECT * FROM tb_solicitacao_vaga
                     INNER JOIN tb_vaga ON tb_solicitacao_vaga.id_vaga=tb_vaga.id_vaga
                     INNER JOIN tb_cliente ON tb_solicitacao_vaga.id_cliente=tb_cliente.id_cliente
                     INNER JOIN tb_carro_cliente ON tb_cliente.id_cliente=tb_carro_cliente.id_cliente
                     WHERE tb_cliente.id_cliente=:id AND tb_solicitacao_vaga.id_solicitacao_vaga=:idSolicitacao", $parametros);
                    foreach($buscandoSolicitada as $mostrar):
                      $id = $mostrar['id_solicitacao_vaga'];
                      $espaco  = $mostrar['espaco_vago'];
                      $preco   = $mostrar['preco'];
                      $descricao = $mostrar['descricao'];
                      $nomeCliente = $mostrar['nome_cliente'];
                      $marca       = $mostrar['marca'];
                      $modelo      = $mostrar['modelo']; 
                      $cor         = $mostrar['cor'];
                      $matricula   = $mostrar['matricula'];
                      $foto        = $mostrar['foto_cliente'];
                      $email       = $mostrar['email_cliente'];
                      $bi = $mostrar['num_bi'];
                      $idade = $mostrar['idade'];
                      $tel = $mostrar['tel_cliente'];
                      $genero = $mostrar['genero'] === "M" ? "Masculino": "Feminino";
                    endforeach;
                    
                    // Pegando o id do carro 
                    $parametros = [":id" => $_GET['id']];
                    $idCarroSelected = new Model();
                    $pegandoIdCarro = $idCarroSelected->EXE_QUERY("SELECT * FROM tb_carro_cliente WHERE id_cliente=:id", $parametros);
                    foreach($pegandoIdCarro as $pegar):
                      $idCarroCliente = $pegar['id_carro'];
                    endforeach;
                  
                  ?>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="p-4 bg-white borda-top">
                        <h2 class="h5">Dados do cliente</h2>
                      </div>
                      <div class="rounded p-4 mt-2 borda-top" style="">
                        <div style="margin: 0 auto; text-align: center; ">
                          <img src="../assets/images/profile/<?= $foto ?>" alt="" style="border-radius: 50%; width: 100px; height: 100px;">
                        </div>
                        <div class="text-center mt-3">
                        <span><strong><?= $nomeCliente ?></strong></span>
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

                    <div class="col-lg-8">
                      <div class="bg-white p-3">
                        <div class="p-3">
                          <h2 class="h5">Espaço solicitado <strong><?= $espaco ?></strong></h2>
                          <hr>
                          <p><?= $descricao ?></p>       
                          
                          <form method="POST" class="mt-4">
                            <button 
                              type="submit"
                              name="entradaCarro"
                              class="btn btn-primary" 
                              title="Adicionar entrada do carro no estacionamento">Adicionar Entrada</button>

                              <?php
                                if(isset($_POST['entradaCarro'])):
                                  $parametros = [
                                    ":id" => $idCarroCliente,
                                    ":idSolicitacao" => $_GET['id_solicitacao'],
                                    ":estado"        => 0
                                  ];
                                  $inserir = new Model();
                                  $inserir->EXE_NON_QUERY("INSERT INTO 
                                  tb_entrada_saida (id_carro, id_solicitacao_vaga, data_entrada, data_saida, estado, data_registro) 
                                  VALUES (:id, :idSolicitacao, now(), null, :estado, now()) ", $parametros);

                                  if($inserir):
                                    echo "<script>window.alert('Entrada de carro efetuado com sucesso')</script>";
                                    echo "<script>location.href='registro-online.php?id=online'</script>";
                                  endif;
                                endif;?>
                          </form>
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

