<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Painel de Administração</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>	
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css"/>
<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"> </script>

<script type="text/javascript">
  $(document).ready(function (){
    $("[rel=tooltip]").tooltip({ placement: 'right', delay :{show:0, hide:0}, animation: false});
  });
</script>

<script type="text/javascript" src=""></script>
<style type="text/css">

body{
	margin:0;
}

#all{
	margin:0 auto;
	width:100%;
	margin-top:0px;
}


</style>
</head>

<body>
<div id="all">



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



<div style="font-size:20px; margin-top:10px;" align="center">
Painel de mensagens
</div>

<form action="#" id="altera">
<?php
  
require('conexao.php');

$cont = 1;

  $busca = mysql_query("SELECT * FROM tblwisiocontato ORDER BY id DESC");
  if (mysql_num_rows($busca))
  {
    echo '<table class="table table-hover" style="margin-top:40px;">';
    while ($resultado = mysql_fetch_array($busca))
    {
      extract($resultado);
      
	  
	  if($cont ==1){
	  
	  echo '<tr style="background-color:#f5f5f5;">';
	  echo '<td></td>'; 
	  echo '<td><h5>Data</h5></td>';
	  echo '<td><h5>Hora</h5></td>';
      echo '<td><h5>Nome</h5></td>';
	  echo '<td><h5>Email</h5></td>';
	  echo '<td><h5>Assunto</h5></td>';
	  echo '<td><h5>Visualizar</h5></td>';
	  echo '<td><h5>Excluir</h5></td>';
	  
	  echo '</tr>';
	  
	  }


	  if($status == 0){
      echo '<tr>';
	  echo '<td></td>'; 
      echo ' <td><b>'.$data.'</b></td>';
      echo ' <td><b>'.$hora.'</b></td>';
      echo '  <td><b>'.$nome.'</b></td>';    
	  echo '  <td><b>'.$email.'</b></td>';        
      echo '  <td><b>'.$assunto.'</b></td>';    
      echo '  <td><a href="visualizar.php?id='.$id.'&stock=false" rel="tooltip" title="Visualizar"><i class="icon-zoom-out"></i></a></td>';
	  echo '<td><a href="excluir.php?id='.$id.'&stock=false" rel="tooltip" title="Excluir"><i class="icon-trash"></i></a></td>';      
	  echo '</tr>';
	 }

	 else{

	  echo '<tr>';
	  echo '<td></td>'; 
      echo ' <td>'.$data.'</td>';
      echo ' <td>'.$hora.'</td>';
      echo '  <td>'.$nome.' </td>'; 
	  echo '  <td>'.$email.'</td>';         
      echo '  <td>'.$assunto.'</td>';   
      echo '  <td><a href="visualizar.php?id='.$id.'&stock=false" rel="tooltip" title="Visualizar"><i class="icon-zoom-out"></i></a></td>';

	  echo '<td><a href="excluir.php?id='.$id.'&stock=false" rel="tooltip" title="Excluir"><i class="icon-trash"></i></a></td>';      
	  echo '</tr>';

	 }
	  
	  $cont = 0;
    }  
	
	echo '<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'; 
    echo '</table>';
  }

?>

</form>

</div>
</body>
</html>