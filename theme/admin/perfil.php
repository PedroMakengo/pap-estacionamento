
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

                <div class="col-lg-4 col-sm-12 col-xl-4"  
                  data-aos="fade-right"
                  data-aos-duration="2300">
                  <div class="rounded p-4 borda-top" style="">
                    <div style="margin: 0 auto; text-align: center; ">
                      <img src="../assets/images/profile/profile.jpg" alt="" style="border-radius: 50%; width: 100px; height: 100px;">
                    </div>
                    <div class="text-center mt-3">
                     <span><strong><?= $_SESSION['nome'] ?></strong></span>
                    </div>
                  </div>

                  <div class="rounded p-4 borda-top mt-2" style="">
                   
                  </div>
                </div>

                <div
                  class="col-lg-8 col-xl-8 col-sm-12"
                  data-aos="fade-left"
                  data-aos-duration="2300"
                >
                  <div class="card">
                    <form action="" class="col-lg-12">
                      <div class="row mt-2">
                        <div class="form-group col-lg-6">
                          <label for="">Nome</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="">Nome</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="">Nome</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="">Nome</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                          <input type="submit" class="form-control btn btn-primary" value="Enviar">
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
    <?php require 'includes/footer.php'; ?>
    <!-- Footer -->
  </body>
</html>
<!-- end document-->

