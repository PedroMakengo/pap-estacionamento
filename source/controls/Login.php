<?php
  // Efectuando a verificação do login
  if(isset($_POST['logar'])):
    // Pegar os dados enviado apartir do front-end
    $email = $_POST['email'];
    $pass  = md5(md5($_POST['senha']));

    
    $parametros = [
      ":email"  => $email,
      ":senha"   => $pass 
    ];

    $searchLogin = new Model();  
    $loginAdmin = $searchLogin->EXE_QUERY("SELECT * FROM tb_admin WHERE email=:email AND senha=:senha", $parametros);

    if($loginAdmin):
      foreach($loginAdmin as $mostrar): 
        $_SESSION['id_admin'] = $mostrar['id_admin'];
        $_SESSION['nome']     = $mostrar['nome'];
        $_SESSION['email']    = $mostrar['email']; 
        $_SESSION['senha']    = $mostrar['senha'];
        $_SESSION['foto']     = $mostrar['foto'];
      endforeach;
      echo "<script>location.href='admin/index.php?id=home'</script>";
    else:
      $loginUser = $searchLogin->EXE_QUERY("SELECT * FROM tb_cliente WHERE email_cliente=:email AND senha_cliente=:senha", $parametros);
      if($loginUser):
        foreach($loginAdmin as $mostrar): 
          $_SESSION['id_admin'] = $mostrar['id_cliente'];
          $_SESSION['nome']     = $mostrar['nome_cliente'];
          $_SESSION['email']    = $mostrar['email_cliente']; 
          $_SESSION['senha']    = $mostrar['senha_cliente'];
          $_SESSION['foto']     = $mostrar['foto_cliente'];
          $_SESSION['num_bi']   = $mostrar['num_bi'];
          $_SESSION['genero']   = $mostrar['genero'];
          $_SESSION['idade']    = $mostrar['idade'];
        endforeach;
        echo "<script>location.href='users/index.php?id=home'</script>";
      else:
        echo "<script>window.alert('Este usuário não existe')</script>";
      endif;
    endif;
  endif;
