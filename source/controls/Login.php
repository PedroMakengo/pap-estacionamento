<?php
  // Efectuando a verificação do login
  if(isset($_POST['logar'])){
    // Pegar os dados enviado apartir do front-end
    $email = $_POST['email'];
    $pass  = $_POST['senha'];

    echo "<script>window.alert('Login funcionando')</script>";
  }
