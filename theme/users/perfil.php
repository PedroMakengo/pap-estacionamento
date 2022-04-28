
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
                  class="col-lg-4 col-lg-4 col-sm-12 mt-1"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >
                  <div class="p-4 card">
                    <div style="margin: 0 auto; text-align: center; ">
                      <img src="../assets/images/profile/profile.jpg" alt="" style="border-radius: 50%; width: 100px; height: 100px;">
                    </div>
                    <div class="text-center mt-2">
                      <strong><?= $_SESSION['nome'] ?></strong>
                    </div>
                  </div>
                </div>

                <div
                  class="col-lg-8 col-lg-8 col-sm-12 mt-1"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >
                 <div class="p-4 card">
                    <form method="POST" enctype="multipart/form-data">
                      <div class="row">
                        <?php
                          $parametros = [
                            ":id"   => $_SESSION["id"],
                          ]; 
                          $perfilUsuario = new Model();
                          $atualizarPerfil = $perfilUsuario->EXE_QUERY("SELECT * FROM tb_cliente WHERE id_cliente=:id", $parametros);
                          foreach($atualizarPerfil as $mostrar):
                        ?>
                            <div class="col-lg-6 form-group">
                              <label for="">Nome Completo:</label>
                              <input type="text" name="nome" value="<?= $mostrar['nome_cliente'] ?>" class="form-control" >
                            </div>
                            <div class="col-lg-6 form-group">
                              <label for="">E-mail: </label>
                              <input type="text" name="email" value="<?= $mostrar['email_cliente'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                              <label for="">Senha:</label>
                              <input type="text" name="senha"  class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                              <label for="">Telefone:</label>
                              <input type="tel" name="tel" value="<?= $mostrar['tel_cliente'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                              <label for="">Número do BI:</label>
                              <input type="text" maxlength="15" name="bi" value="<?= $mostrar['num_bi'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                              <label for="">Idade:</label>
                              <input type="text" name="idade" value="<?= $mostrar['idade'] ?>" class="form-control">
                            </div>
                           
                            <div class="col-lg-6 form-group">
                              <label for="">Foto:</label>
                              <input type="file" name="foto" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                              <label for="">Genero:</label>
                              <select name="genero" id="" class="form-control">
                                <option value="">Selecione o genero</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                              </select>
                            </div>
                        <?php 
                        endforeach;
                        ?>
                        <div class="col-lg-4 form-group">
                          <input type="submit" name="atualizarPerfilUser" class="form-control btn btn-primary" value="Atualizar">
                        </div>
                      </div>
                    </form>

                    <?php

                      if(isset($_POST['atualizarPerfilUser'])):
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];

                        $senha = $_POST['senha'] === '' ? $mostrar['senha_cliente'] : md5(md5($_POST['senha']));

                        $target        = "assets/images/profile/" . basename($_FILES['foto']['name']);
                        $foto          = $_FILES['foto']['name'] === '' ? $mostrar['foto_cliente'] : $_FILES['foto']['name'];

                        $genero = $_POST['genero'] === "" ? $mostrar['genero'] : $_POST['genero']; 
                        $tel    = $_POST['tel'];
                        $idade  = $_POST['idade'];
                        $bi     = $_POST['bi'];

                        $parametros = [
                          ":id"   => $_SESSION["id"],
                          ":nome" => $nome,
                          ":senha" => $senha,
                          ":foto"  => $foto,
                          ":idade" => $idade,
                          ":bi"    => $bi,
                          ":email" => $email,
                          ":genero"=> $genero
                        ];

                        $atualizar = new Model();
                        $atualizar->EXE_NON_QUERY("UPDATE tb_cliente SET
                        nome_cliente=:nome,
                        senha_cliente=:senha,
                        foto_cliente=:foto,
                        idade=:idade, 
                        num_bi=:bi,
                        email_cliente=:email,
                        genero=:genero
                        WHERE id_cliente=:id
                        ", $parametros);
                        if($atualizar):
                          echo "<script>location.href='perfil.php?id=perfil'</script>";
                        endif;
                      endif;
                    ?>
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
