
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
                <div
                  class="col-lg-12 col-xl-12 col-sm-12 mt-1"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >

                  <?php
                      // Verificando se já se inscreveu nesta vaga 
                      $parametros = [
                        ":idVaga" => $_GET['id'],
                        ":id"     => $_SESSION['id']
                      ];
                      $solicitacaoNestaVaga = new Model();
                      $verificandoSolicitacaoVaga = $solicitacaoNestaVaga->EXE_QUERY("SELECT * FROM tb_solicitacao_vaga WHERE id_vaga=:idVaga AND id_cliente=:id", $parametros);
                      if($verificandoSolicitacaoVaga):
                  ?>
                      <div class="rounded p-4 card">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="bg-warning p-3 text-center text-white">
                              <h2 class="h5">Já solicitaste está vaga</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php else: ?>
                      <div class="rounded p-4 card">
                        <h1 class="title">Preenchimento da vaga</h1>
                        <hr>
                        <?php 
                          $parametros = [":id" => $_GET['id']];
                          $buscandoVaga = new Model();
                          $vagaBuscando = $buscandoVaga->EXE_QUERY("SELECT * FROM tb_vaga WHERE id_vaga=:id", $parametros);
                          foreach($vagaBuscando as $mostrar):
                            $espaco = $mostrar['espaco_vago'];
                            $preco  = $mostrar['preco'];
                            $descricao = $mostrar['descricao'];
                          endforeach;
                        ?>
                        <form method="POST">
                          <div class="row">
                            <div class="col-lg-4 form-group">
                              <label for="#">Nome Completo</label>
                              <input type="text" disabled value="<?= $_SESSION['nome'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-4 form-group">
                              <label for="#">Espaço</label>
                              <input type="text" disabled value="<?= $espaco ?>" class="form-control">
                            </div>
                            <div class="col-lg-4 form-group">
                              <label for="#">Preço</label>
                              <input type="text" disabled value="<?= $preco ?>" class="form-control">
                            </div>
                            <div class="col-lg-12 form-group">
                              <label for="#">Mensagem</label>
                              <textarea name="mensagem" class="form-control" placeholder="Deixe uma mensagem para garantires a vaga"></textarea>
                            </div>
                            <div class="col-lg-3 form-group">
                              <input type="submit" name="solicitar" value="Efetuar solicitação" class="form-control btn btn-primary" />
                            </div>
                          </div>
                        </form>

                        <?php 
                          if(isset($_POST['solicitar'])):
                            $idVaga = $_GET['id'];
                            $idCliente = $_SESSION['id'];
                            $mensagem  = $_POST['mensagem'];

                            $estado    = 0;

                            $parametros = [
                              ":idCliente"  => $idCliente,
                              ":idVaga"     => $idVaga,
                              ":mensagem"   => $mensagem,
                              ":estado"     => $estado,
                            ];

                            $inserirSolicitacao = new Model();
                            $inserirSolicitacao->EXE_NON_QUERY("INSERT INTO tb_solicitacao_vaga 
                            (id_cliente, id_vaga, mensagem, estado_solicitacao, data_solicitacao) 
                            VALUES (:idCliente, :idVaga, :mensagem, :estado, now()) ", $parametros);

                            if($inserirSolicitacao):
                              echo "<script>window.alert('Solicitação inserida com sucesso')</script>";
                              echo "<script>location.href='index.php?id=home'</script>";
                            endif;
                          endif;
                        ?>
                      </div>
                  <?php endif; ?>
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
