<!-- Terminar sessão -->
<?php
    require '../../source/Config.php';
    require '../../source/Model.php';
    // Session start
    session_start();
    if(!isset($_SESSION['email']) AND !isset($_SESSION['senha'])):
		header('location: ../login.php');
		exit();
	endif;

	if(isset($_GET['logout']) && $_GET['logout'] == 'true'):
		session_destroy();
		header("location: ../login.php");
    endif;
    // Uzar um controlador aqui para efetuar todas as operações de insert
?>
<!-- End sessão -->

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>System-Estans</title>

    <!-- Fontfaces CSS-->
    <link
      rel="stylesheet"
      href="../assets/fonts/font-awesome-4.7/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="../assets/fonts/font-awesome-5/css/fontawesome-all.min.css"
    />
    <!-- Bootstrap CSS-->
    <link
      href="../assets/vendor/bootstrap-4.1/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Vendor CSS-->
    <link
      href="../assets/vendor/animsition/animsition.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link
      href="../assets/styles/theme/theme.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Animações -->
    <link rel="stylesheet" href="../assets/styles/theme/aos.css" />

    <link rel="stylesheet" href="../assets/styles/dashboard.css" />
    <link rel="stylesheet" href="../assets/styles/dataTables.bootstrap4.css">
    <style>
      .navbar-sidebar li.active, 
      .navbar-sidebar li.active a {
        background-color: #fff !important;
        border-radius: 0.5rem;
        color: #000 !important;
      }

      .navbar-sidebar li a {
        padding-left: 1rem !important;
      }

      .bg-user-estacionamento {
        display: flex !important;
        flex-wrap: wrap;
      }

      .bg-user-estacionamento .navbar-sidebar{
        width: 100%;
        height: 80%;
      }
      .stans-office {
        width: 100%;
        height: 10%;
        background-color: #E5E5E5 !important;

        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .stans-office h2 {
        font-weight: normal;
        font-size: 20px !important;
        color: #000;
      }

      .banner-dashboard {
        margin-top: -120px
      }

      .btn-primary {
        background: #212121;
        border: 0;
      }
    </style>
  </head>