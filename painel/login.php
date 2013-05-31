<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>P&aacute;gina de Login</title>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css"/>

<style type="text/css">

#main {
    width: 600px;
    height: 260px;
    background: #f2f2f2;
    padding: 6px 10px;
    border: 1px solid #b5b5b5;
 
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: inset 0 0 3px rgba(255, 255, 255, 0.8), inset 0 2px 2px rgba(255, 255, 255, 1), 0 5px 0 #ccc, 0 6px 0 #989898, 0 13px 0 #dfdede;
    -webkit-box-shadow: inset 0 0 3px rgba(255, 255, 255, 0.8), inset 0 2px 2px rgba(255, 255, 255, 1), 0 5px 0 #ccc, 0 6px 0 #989898, 0 13px 0 #dfdede;
    box-shadow: inset 0 0 3px rgba(255, 255, 255, 0.8), inset 0 2px 2px rgba(255, 255, 255, 1), 0 5px 0 #ccc, 0 6px 0 #989898, 0 13px 0 #dfdede;
}


label{
	font-size:16px;

}

#texto{
	font-size:20px;
	margin-left:10px;
	margin-top:40px;
}

#conteudo{
	margin-top:150px;
}


input[type="text"]{
	margin-left:10px;
}

input[type="password"]{
	margin-left:10px;
}

</style>
</head>

<body>

<?php
include("seguranca.php");
usuarioLogado();
?>


<center>

<div id="conteudo">

 <div id="main">
<p id="texto">
Painel Administrativo
</p>
<div style="margin-top:30px;">
<form method="post" action="valida.php">
<table>
<tr>
<td>
<label> Usu&aacute;rio: </label>
</td>
<td>
<input type="text" size="50" id="usuario" name="usuario" required onFocus="if(this.value=='Escreva aqui')this.value='';"/>
</td>
</tr>
<tr>
<td>
<label> Senha: </label>
</td>
<td>
<input type="password" size="50" id="senha" name="senha" required/>
</td>
</tr>
</table>
<br>
<div align="center">
<input type="submit" class="btn btn-info" value="Entrar">
<input type="reset" class="btn btn-info" value="Limpar">

</div>
</form>
</div>
</div>

</div>

</center>


</body>
</html>