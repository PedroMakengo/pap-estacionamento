<?php
    include '../../source/Config.php';
    include '../../source/Model.php';
    include '../assets/mpdf-6.1/mpdf.php';

    switch ($_GET['id']):
      case 'vaga':
        // Instanciando
          $usuario = new Model();
          $sql = $usuario->EXE_QUERY("SELECT * FROM tb_vaga");

          $html = "
                <html>
                  <head>
                      <style type='text/css'>
                          body {margin: 0 auto;padding: 0px;font-weight: 100 !important;}
                          .container {margin: 100px auto !important;}
                          .nav-header {margin: 0px auto;text-align: center;}
                          .mk-title {font-weight: 100;font-size: 18px;}
                          .mk-title-lg {font-weight: 100;font-size: 18px}

                          table { width: 100%; border-spacing: 0 0.5rem; }
                          table th {
                            background: #1f6feb;
                            font-weight: 400;
                            padding: 1rem 2rem;
                            text-align: left;
                            line-height: 1.5rem;
                          }
                          table td {
                            padding: 1rem 2rem;
                            border: 0;
                            background: #f7f7f7;
                            color: #000 !important;
                          }
                      </style>
                  </head>
                  <body>
                      <div class='container'>
                          <div class='row'>
                              <div class='nav-header'>
                                  <h2 class='text-center h5 mk-title'>REPÚBLICA DE ANGOLA</h2>
                                  <h2 class='text-center h5 mk-title'>ANGO-PARQUE</h2>
                                  <p class='mt-2'>Relatório de candidaturas</p>
                              </div>
                          </div>
                          <div class='body-mk mt-4'>
                              <div class='table'>
                                  <table>
                                      <thead>
                                          <tr>
                                              <th style='color: white'>Id</th>
                                              <th style='color: white'>Espaço</th>
                                              <th style='color: white'>Preço</th>
                                              <th style='color: white'>Descrição</th>
                                          </tr>
                                      </thead>
                                      <tbody>
              ";
              foreach ($sql as $mostrar) :
                $html = $html ."
                                          <tr>
                                              <td>{$mostrar["id_vaga"] }</td>
                                              <td>{$mostrar["espaco_vago"] }</td>
                                              <td>{$mostrar["preco"]}</td>
                                              <td>{$mostrar["descricao"] }</td>
                                          </tr>
                ";
                      endforeach;
                      $html = $html."
                                      </tbody>
                                  </table>
                              </div>
                          </div>
              </div>
              ";

          $multa = "index.php";
          $mpdf = new mPDF();
          $mpdf->SetDisplayMode("fullpage");
          $mpdf->WriteHTML($html);
          $mpdf->Output($multa, 'I');
          exit();
      break;

      case 'entrada':
          // Instanciando
          $usuario = new Model();
          $sql = $usuario->EXE_QUERY("SELECT * FROM tb_estacionar_carro WHERE estado=0");

          $html = "
                <html>
                  <head>
                      <style type='text/css'>
                          body {margin: 0 auto;padding: 0px;font-weight: 100 !important;}
                          .container {margin: 100px auto !important;}
                          .nav-header {margin: 0px auto;text-align: center;}
                          .mk-title {font-weight: 100;font-size: 18px;}
                          .mk-title-lg {font-weight: 100;font-size: 18px}
                          img {width: 80px;height: 80px}


                          table { width: 100%; border-spacing: 0 0.5rem; }
                          table th {
                            background: #1f6feb;
                            font-weight: 400;
                            padding: 1rem 2rem;
                            text-align: left;
                            line-height: 1.5rem;
                          }
                          table td {
                            padding: 1rem 2rem;
                            border: 0;
                            background: #f7f7f7;
                            color: #000 !important;
                          }
                      </style>
                  </head>
                  <body>
                      <div class='container'>
                          <div class='row'>
                              <div class='nav-header'>
                                  <h2 class='text-center h5 mk-title'>REPÚBLICA DE ANGOLA</h2>
                                  <h2 class='text-center h5 mk-title'>ANGO-PARQUE</h2>
                                  <p class='mt-2'>Relatório de Entrada de Carros</p>
                              </div>
                          </div>
                          <div class='body-mk mt-4'>
                              <div class='table'>
                                  <table>
                                      <thead>
                                          <tr>
                                              <th style='color: white'>Id</th>
                                              <th style='color: white'>Nome Completo</th>
                                              <th style='color: white'>B.I</th>
                                              <th style='color: white'>Modelo</th>
                                              <th style='color: white'>Data Entrada</th>
                                              <th style='color: white'>Matricula</th>
                                          </tr>
                                      </thead>
                                      <tbody>
              ";
              foreach ($sql as $mostrar) :
                $html = $html ."
                                          <tr>
                                              <td>{$mostrar["id_estacionar"] }</td>
                                              <td>{$mostrar["nome_cliente"] }</td>
                                              <td>{$mostrar["bi"] }</td>
                                              <td>{$mostrar["modelo"] }</td>
                                              <td>{$mostrar["data_entrada"] }</td>
                                              <td>{$mostrar["matricula"] }</td>
                                          </tr>
                ";
                      endforeach;
                      $html = $html."
                                      </tbody>
                                  </table>
                              </div>
                          </div>
              </div>
              ";

          $multa = "index.php";
          $mpdf = new mPDF();
          $mpdf->SetDisplayMode("fullpage");
          $mpdf->WriteHTML($html);
          $mpdf->Output($multa, 'I');
          exit();
      case 'saida':
          // Instanciando
          $usuario = new Model();
          $sql = $usuario->EXE_QUERY("SELECT * FROM tb_estacionar_carro WHERE estado=1");

          $html = "
                <html>
                  <head>
                      <style type='text/css'>
                          body {margin: 0 auto;padding: 0px;font-weight: 100 !important;}
                          .container {margin: 100px auto !important;}
                          .nav-header {margin: 0px auto;text-align: center;}
                          .mk-title {font-weight: 100;font-size: 18px;}
                          .mk-title-lg {font-weight: 100;font-size: 18px}
                          img {width: 80px;height: 80px}


                          table { width: 100%; border-spacing: 0 0.5rem; }
                          table th {
                            background: #1f6feb;
                            font-weight: 400;
                            padding: 1rem 2rem;
                            text-align: left;
                            line-height: 1.5rem;
                          }
                          table td {
                            padding: 1rem 2rem;
                            border: 0;
                            background: #f7f7f7;
                            color: #000 !important;
                          }
                      </style>
                  </head>
                  <body>
                      <div class='container'>
                          <div class='row'>
                              <div class='nav-header'>
                                  <h2 class='text-center h5 mk-title'>REPÚBLICA DE ANGOLA</h2>
                                  <h2 class='text-center h5 mk-title'>ANGO-PARQUE</h2>
                                  <p class='mt-2'>Relatório de Saída de Carros</p>
                              </div>
                          </div>
                          <div class='body-mk mt-4'>
                              <div class='table'>
                                  <table>
                                      <thead>
                                          <tr>
                                              <th style='color: white'>Id</th>
                                              <th style='color: white'>Nome Completo</th>
                                              <th style='color: white'>B.I</th>
                                              <th style='color: white'>Modelo</th>
                                              <th style='color: white'>Data Saída</th>
                                              <th style='color: white'>Matricula</th>
                                          </tr>
                                      </thead>
                                      <tbody>
              ";
              foreach ($sql as $mostrar) :
                $html = $html ."
                                          <tr>
                                              <td>{$mostrar["id_estacionar"] }</td>
                                              <td>{$mostrar["nome_cliente"] }</td>
                                              <td>{$mostrar["bi"] }</td>
                                              <td>{$mostrar["modelo"] }</td>
                                              <td>{$mostrar["data_saida"] }</td>
                                              <td>{$mostrar["matricula"] }</td>
                                          </tr>
                ";
                      endforeach;
                      $html = $html."
                                      </tbody>
                                  </table>
                              </div>
                          </div>
              </div>
              ";

          $multa = "index.php";
          $mpdf = new mPDF();
          $mpdf->SetDisplayMode("fullpage");
          $mpdf->WriteHTML($html);
          $mpdf->Output($multa, 'I');
          exit();
        break;

      case 'solicitacoes':
          // Instanciando
          $usuario = new Model();
          $sql = $usuario->EXE_QUERY("SELECT * FROM tb_solicitacao_vaga
          INNER JOIN tb_vaga ON tb_solicitacao_vaga.id_vaga=tb_vaga.id_vaga
          INNER JOIN tb_cliente ON tb_solicitacao_vaga.id_cliente=tb_cliente.id_cliente");
          $html = "
                <html>
                  <head>
                      <style type='text/css'>
                          body {margin: 0 auto;padding: 0px;font-weight: 100 !important;}
                          .container {margin: 100px auto !important;}
                          .nav-header {margin: 0px auto;text-align: center;}
                          .mk-title {font-weight: 100;font-size: 18px;}
                          .mk-title-lg {font-weight: 100;font-size: 18px}
                          img {width: 80px;height: 80px}

                          table { width: 100%; border-spacing: 0 0.5rem; }
                          table th {
                            background: #1f6feb;
                            font-weight: 400;
                            padding: 1rem 2rem;
                            text-align: left;
                            line-height: 1.5rem;
                          }
                          table td {
                            padding: 1rem 2rem;
                            border: 0;
                            background: #f7f7f7;
                            color: #000 !important;
                          }
                      </style>
                  </head>
                  <body>
                      <div class='container'>
                          <div class='row'>
                              <div class='nav-header'>
                                  <h2 class='text-center h5 mk-title'>REPÚBLICA DE ANGOLA</h2>
                                  <h2 class='text-center h5 mk-title'>ANGO-PARQUE</h2>
                                  <p class='mt-2'>Relatório de Solicitações de Vaga</p>
                              </div>
                          </div>
                          <div class='body-mk mt-4'>
                              <div class='table'>
                                  <table>
                                      <thead>
                                          <tr>
                                              <th style='color: white'>Id</th>
                                              <th style='color: white'>Solicitante</th>
                                              <th style='color: white'>Vaga</th>
                                              <th style='color: white'>Data Solicitação</th>
                                          </tr>
                                      </thead>
                                      <tbody>
              ";
              foreach ($sql as $mostrar) :
                $html = $html ."
                                          <tr>
                                              <td>{$mostrar["id_solicitacao_vaga"] }</td>
                                              <td>{$mostrar["nome_cliente"] }</td>
                                              <td>{$mostrar["espaco_vago"] }</td>
                                              <td>{$mostrar["data_solicitacao"] }</td>
                                          </tr>
                ";
                      endforeach;
                      $html = $html."
                                      </tbody>
                                  </table>
                              </div>
                          </div>
              </div>
              ";

          $multa = "index.php";
          $mpdf = new mPDF();
          $mpdf->SetDisplayMode("fullpage");
          $mpdf->WriteHTML($html);
          $mpdf->Output($multa, 'I');
          exit();
         break;
      case 'carros':
        // Instanciando
        $usuario = new Model();
        $sql = $usuario->EXE_QUERY("SELECT * FROM tb_carro_cliente
        INNER JOIN tb_cliente ON tb_carro_cliente.id_cliente=tb_cliente.id_cliente");
        $html = "
              <html>
                <head>
                    <style type='text/css'>
                        body {margin: 0 auto;padding: 0px;font-weight: 100 !important;}
                        .container {margin: 100px auto !important;}
                        .nav-header {margin: 0px auto;text-align: center;}
                        .mk-title {font-weight: 100;font-size: 18px;}
                        .mk-title-lg {font-weight: 100;font-size: 18px}
                        img {width: 80px;height: 80px}

                        table { width: 100%; border-spacing: 0 0.5rem; }
                        table th {
                          background: #1f6feb;
                          font-weight: 400;
                          padding: 1rem 2rem;
                          text-align: left;
                          line-height: 1.5rem;
                        }
                        table td {
                          padding: 1rem 2rem;
                          border: 0;
                          background: #f7f7f7;
                          color: #000 !important;
                        }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='row'>
                            <div class='nav-header'>
                                <h2 class='text-center h5 mk-title'>REPÚBLICA DE ANGOLA</h2>
                                <h2 class='text-center h5 mk-title'>ANGO-PARQUE</h2>
                                <p class='mt-2'>Relatório de Carros</p>
                            </div>
                        </div>
                        <div class='body-mk mt-4'>
                            <div class='table'>
                                <table>
                                    <thead>
                                        <tr>
                                            <th style='color: white'>Id</th>
                                            <th style='color: white'>Dono do Carro</th>
                                            <th style='color: white'>Modelo</th>
                                            <th style='color: white'>Marca</th>
                                            <th style='color: white'>Matricula</th>
                                            <th style='color: white'>Data de registro</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            ";
            foreach ($sql as $mostrar) :
              $html = $html ."
                                        <tr>
                                            <td>{$mostrar["id_carro"] }</td>
                                            <td>{$mostrar["nome_cliente"] }</td>
                                            <td>{$mostrar["modelo"] }</td>
                                            <td>{$mostrar["marca"] }</td>
                                            <td>{$mostrar["matricula"] }</td>
                                            <td>{$mostrar["data_registro_carro"] }</td>
                                        </tr>
              ";
                    endforeach;
                    $html = $html."
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
            ";

        $multa = "index.php";
        $mpdf = new mPDF();
        $mpdf->SetDisplayMode("fullpage");
        $mpdf->WriteHTML($html);
        $mpdf->Output($multa, 'I');
        exit();
        break;  
      default:
        break;
    endswitch;
 ?>


