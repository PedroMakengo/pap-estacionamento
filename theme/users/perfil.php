
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
                    <form action="">
                      <div class="row">
                        <div class="col-lg-6 form-group">
                          <label for="">Usuário</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                          <label for="">E-mail</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                          <label for="">Telefone</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                          <label for="">Número do BI</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                          <label for="">Idade</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                          <label for="">Genero</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-4 form-group">
                          <input type="submit" class="form-control btn btn-primary" value="Atualizar">
                        </div>
                      </div>
                    </form>
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
