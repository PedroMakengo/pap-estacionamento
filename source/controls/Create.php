<?php 

    // Efetuando o create do usuário
    if(isset($_POST['criar_conta'])):
      $nome     = $_POST['nome'];
      $email    = $_POST['email'];
      $senha    = md5(md5($_POST['senha']));
      $bi       = $_POST['bi'];
      $telefone = $_POST['telefone'];
      $idade    = $_POST['idade'];
      $genero   = $_POST['genero'];

      $target        = "assets/images/profile/" . basename($_FILES['foto']['name']);
      $foto          = $_FILES['foto']['name'];

      $parametros = [
        ":nome"   => $nome, 
        ":email"  => $email,
        ":senha"  => $senha,
        ":foto"   => $foto,
        ":bi"     => $bi,
        ":tel"    => $telefone,
        ":genero" => $genero,
        ":idade"  => $idade,
      ];
      
      $inserir = new Model();
      $inserir->EXE_NON_QUERY("INSERT INTO tb_cliente 
      (nome_cliente, email_cliente, senha_cliente, foto_cliente, num_bi, tel_cliente, genero, idade, data_registro_cliente) 
      VALUES (:nome, :email, :senha, :foto, :bi, :tel, :genero, :idade, now()) ", $parametros);
      
      if($inserir):
        echo "<script>location.href='login.php'</script>";
         // Uploader
         if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) :
          $sms = "Uploaded feito com sucesso";
        else:
            $sms = "Não foi possível fazer o upload";
        endif;
      endif;
    endif;