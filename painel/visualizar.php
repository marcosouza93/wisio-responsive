<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Visualização de Informações</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css"/>

<style type="text/css">

body{
	margin:0;
}

#all{
	margin:0 auto;
	width:1024px;
}

</style>
</head>

<body>

<!-- Início Menu com alerta-->

<?php 

require('conexao.php');

$alertas = mysql_query("SELECT COUNT(*) AS STATUS FROM tblwisiocontato WHERE status = 0");


$alertasresult = mysql_fetch_assoc($alertas);


$alertas2 = mysql_query("SELECT COUNT(*) AS STATUS FROM tblwisioorcamento WHERE status = 0");


$alertasresult2 = mysql_fetch_assoc($alertas2);



echo '<div class="navbar">';
echo  '<div class="navbar-inner">';
echo   '<a class="brand" href="index.php">Wisio</a>';
echo   '<ul class="nav">';

if($alertasresult['STATUS']==0){
echo    '<li class="active"><a href="index.php">Caixa de entrada </a></li>';
}

else{
	echo    '<li class="active"><a href="index.php">Caixa de entrada <span class="label label-important">'.$alertasresult['STATUS'].'</span></a></li>';
}

if($alertasresult2['STATUS']==0){
	echo    '<li><a href="orcamento/orcamento.php">Orçamento</a></li>';

}

else{
echo    '<li><a href="orcamento/orcamento.php">Orçamento <span class="label label-important">'.$alertasresult2['STATUS'].'</span></a></li>';

}
echo     '<li style="  margin-left:898px;"><a href="logout.php">Sair</a></li>';
echo    '</ul>';

    
echo  '</div>';
  
echo '</div>';

?>
<!-- Fim Menu -->


<?php
include('seguranca.php'	);
protegePagina();

?>


<ul class="breadcrumb">
  <li><a href="index.php">Início</a> <span class="divider">/</span></li>
  <li class="active">Visualizar mensagem</li>
</ul>



<div id="all">
<?php
$id = $_GET['id'];
$stock = $_GET['stock'];
?>
<fieldset>
<legend>Visualização de mensagens</legend>
<?php
if ($stock){
require('conexao.php');

$res = mysql_query("SELECT nome, empresa, email, dddtel, tel, dddcel, cel, assunto, departamento, mensagem FROM tblwisiocontato WHERE id = " . $id) or die(mysql_error());
$result = mysql_fetch_assoc($res);

mysql_query("UPDATE tblwisiocontato set status = 1 where id = ".$id) or die(mysql_error());



echo "
	  <div class='alert alert-info' style='width:1000px; height:auto; padding-bottom: 10px;'>
	  <h3>Mensagem:</h3>

	  <p>
	  Nome:<b> ". $result['nome'] ."</b> <br>
	  Empresa:<b> ". $result['empresa'] ."</b> <br>
	  Email:<b> ". $result['email'] ."</b> <br>
	  Telefone:<b> ". $result['dddtel'] ." ". $result['tel'] ."</b> <br>
	  Celular:<b> ". $result['dddcel'] ." ". $result['cel'] ."</b> <br>
	  Assunto:<b> ". $result['assunto'] ."</b> <br>
	  Departamento:<b> ". $result['departamento'] ."</b> <br>
	  Mensagem:<b> ". $result['mensagem'] ."</b> <br>
	  </p>
	  <a href='mailto:".$result['email']."' class='btn btn-info'>Responder</a>
	  <a href='index.php?cancelar=click' class='btn btn-info'>Voltar</a>
	  
	  </div>
	  ";
	  
	  $stock = false;
	  
}
	
?>
</fieldset>

</div>
</body>
</html>