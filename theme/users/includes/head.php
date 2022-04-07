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
<html lang="en">
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
      href="../assets/style/theme/font-face.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../assets/fonts/font-awesome-5/css/fontawesome-all.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
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

    <style>
      .navbar-sidebar a {
        color: #fff !important;
        padding-left: 0.5rem;

      }

      .navbar-sidebar li a {
        padding-left: 1rem !important;
      }

      .navbar-sidebar li.active, 
      .navbar-sidebar li.active a {
        background-color: #fff !important;
        border-radius: 0.5rem;
        color: #5429CC !important;
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
        font-size: 20px !important;
        color: #5429CC;
      }

      .bg-padrao {
        background-color: #E5E5E5;
      }

      .btn-primary {
        background: #5429CC !important; 
        color: #fff; 
        border: 2px solid #5429CC !important; 
      }
      .banner-dashboard {
        margin-top: -120px;
        background-size: cover !important;
      }
    </style>
  </head>