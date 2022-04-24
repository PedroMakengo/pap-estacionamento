<?php

$mensal = new Model();

$janeiro = $mensal->EXE_QUERY("SELECT count(id_cliente) as janeiro FROM tb_cliente
WHERE month(data_registro_cliente) = 1");
foreach($janeiro as $mostrar):
$janeiro = $mostrar['janeiro'];
endforeach;

$fevereiro = $mensal->EXE_QUERY("SELECT count(id_cliente) as fevereiro FROM tb_cliente
WHERE month(data_registro_cliente) = 2");
foreach($fevereiro as $mostrar):
$fevereiro = $mostrar['fevereiro'];
endforeach;

$marco = $mensal->EXE_QUERY("SELECT count(id_cliente) as marco FROM tb_cliente
WHERE month(data_registro_cliente) = 3");
foreach($marco as $mostrar):
$marco = $mostrar['marco'];
endforeach;

$abril = $mensal->EXE_QUERY("SELECT count(id_cliente) as abril FROM tb_cliente
WHERE month(data_registro_cliente) = 4");
foreach($abril as $mostrar):
$abril = $mostrar['abril'];
endforeach;

$maio = $mensal->EXE_QUERY("SELECT count(id_cliente) as maio FROM tb_cliente
WHERE month(data_registro_cliente) = 5");
foreach($maio as $mostrar):
$maio = $mostrar['maio'];
endforeach;

$junho = $mensal->EXE_QUERY("SELECT count(id_cliente) as junho FROM tb_cliente
WHERE month(data_registro_cliente) = 6");
foreach($junho as $mostrar):
$junho = $mostrar['junho'];
endforeach;

$julho = $mensal->EXE_QUERY("SELECT count(id_cliente) as julho FROM tb_cliente
WHERE month(data_registro_cliente) = 7");
foreach($julho as $mostrar):
$julho = $mostrar['julho'];
endforeach;

$agosto = $mensal->EXE_QUERY("SELECT count(id_cliente) as agosto FROM tb_cliente
WHERE month(data_registro_cliente) = 8");
foreach($agosto as $mostrar):
$agosto = $mostrar['agosto'];
endforeach;

$setembro = $mensal->EXE_QUERY("SELECT count(id_cliente) as setembro FROM tb_cliente
WHERE month(data_registro_cliente) = 9");
foreach($setembro as $mostrar):
$setembro = $mostrar['setembro'];
endforeach;

$outubro = $mensal->EXE_QUERY("SELECT count(id_cliente) as outubro FROM tb_cliente
WHERE month(data_registro_cliente) = 10");
foreach($outubro as $mostrar):
$outubro = $mostrar['outubro'];
endforeach;

$novembro = $mensal->EXE_QUERY("SELECT count(id_cliente) as novembro FROM tb_cliente
WHERE month(data_registro_cliente) = 11");
foreach($novembro as $mostrar):
$novembro = $mostrar['novembro'];
endforeach;

$dezembro = $mensal->EXE_QUERY("SELECT count(id_cliente) as dezembro FROM tb_cliente
WHERE month(data_registro_cliente) = 12");
foreach($dezembro as $mostrar):
$dezembro = $mostrar['dezembro'];
endforeach;

$clientesMensal[] = (int)$janeiro;
$clientesMensal[] = (int)$fevereiro;
$clientesMensal[] = (int)$marco;
$clientesMensal[] = (int)$abril;
$clientesMensal[] = (int)$maio;
$clientesMensal[] = (int)$junho;
$clientesMensal[] = (int)$julho;
$clientesMensal[] = (int)$agosto;
$clientesMensal[] = (int)$setembro;
$clientesMensal[] = (int)$outubro;
$clientesMensal[] = (int)$novembro;
$clientesMensal[] = (int)$dezembro;
