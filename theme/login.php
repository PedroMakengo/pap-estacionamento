<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar sessão</title>
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/styles/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/styles/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/styles/slider.css" />

    <!-- Meu Estilo -->
    <link rel="stylesheet" href="assets/styles/login.css" />
    <style>
    

    </style>
  </head>
  <body>
    <div class="content-login">
      <h3 class="text-uppercase">System-Estans</h3>
      <form action="">
        <input type="email" placeholder="email@gmail.com" />
        <input type="password" placeholder="palavra-passe" />
        <input type="submit" value="Iniciar sessão" />
      </form>

      <p>Criar um estacionamento agora ? <a href="index.php">clique</a></p>
    </div>

    <div class="loader">
      <img src="assets/images/loader.gif" alt="" />
    </div>

    <script src="assets/scripts/jquery-3.2.1.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>
    <script src="assets/scripts/owl.carousel.min.js"></script>
    <script src="assets/scripts/mk.js"></script>

    <script>
      const loader = document.querySelector(".loader");

      setTimeout(() => {
        loader.style.display = "none";
        loader.remove();
      }, 1000);
    </script>
  </body>
</html>
