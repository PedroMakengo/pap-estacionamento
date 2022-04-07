
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
                  <div class="card p-4 ">
                    <p>Solicitar um lugar para o meu carro...</p>
                  </div>
                </div>
                <div
                  class="col-lg-12 col-lg-12 col-sm-12 mt-1"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >
                  <div class="rounded p-4 borda-top card">
                    <form method="POST">
                      <div class="row">
                        <div class="col-lg-12 form-group">
                          <label for="">Lugares Livre</label>
                          <input type="text" class="form-control form-control-lg rounded" placeholder="">
                        </div>
                        <div class="col-lg-12 form-group">
                          <label for="">Mensagem</label>
                          <textarea class="form-control form-control-lg"></textarea>
                        </div>
                        <div class="col-lg-12">
                          <input type="submit" value="Enviar Solicitação" class="btn btn-primary">
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
