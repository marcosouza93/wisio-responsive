<?php
$_SG['conectaServidor'] = true;
$_SG['abreSessao'] = true;

$_SG['caseSensitive'] = false;

$_SG['validaSempre'] = true;

$_SG['servidor'] = 'dbmy0105.whservidor.com';
$_SG['usuario'] = 'wisio';
$_SG['senha'] = '89i7adxk';
$_SG['banco'] = 'wisio';

$_SG['paginaLogin'] = 'login.php';
$_SG['paginaIndex'] = 'index.php';
$_SG['tabela'] = 'tblwisiousuarios';


if ($_SG['conectaServidor'] == true) {

$_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: Não foi possível conectar-se ao servidor [".$_SG['servidor']."].");

mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$_SG['banco']."].");
}

if ($_SG['abreSessao'] == true) {

session_start();

if (array_key_exists('HTTP_USER_AGENT', $_SESSION))
{
    if ($_SESSION['HTTP_USER_AGENT'] !=
        md5($_SERVER['HTTP_USER_AGENT']))
    {
      exit;
    }
}
else
{
    $_SESSION['HTTP_USER_AGENT'] =
        md5($_SERVER['HTTP_USER_AGENT']);
}
}

function validaUsuario($usuario, $senha) {
global $_SG;

$cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

// Usa a função addslashes para escapar as aspas
$nusuario = addslashes($usuario);
$nsenha = addslashes($senha);

$sql = "SELECT `id`, `Nome` FROM `".$_SG['tabela']."` WHERE ".$cS." `Usuario` = '".$nusuario."' AND ".$cS." `Senha` = '".$nsenha."' LIMIT 1";
$query = mysql_query($sql);
$resultado = mysql_fetch_assoc($query);
if (empty($resultado)) {
return false;
} else {
$_SESSION['usuarioID'] = $resultado['id'];
$_SESSION['usuarioNome'] = $resultado['Nome']; 

if ($_SG['validaSempre'] == true) {
$_SESSION['usuarioLogin'] = $usuario;
$_SESSION['usuarioSenha'] = $senha;
}
return true;
}
}

function protegePagina() {
global $_SG;

if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
// Não há usuário logado, manda pra página de login
expulsaVisitante();
} else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
// Há usuário logado, verifica se precisa validar o login novamente
if ($_SG['validaSempre'] == true) {
// Verifica se os dados salvos na sessão batem com os dados do banco de dados
if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
// Os dados não batem, manda pra tela de login
expulsaVisitante();
}
}
}
}
function expulsaVisitante() {
global $_SG;

// Remove as variáveis da sessão (caso elas existam)
unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);

// Manda pra tela de login
header("Location: ".$_SG['paginaLogin']);
}


function usuarioLogado() {
global $_SG;


if ($_SG['validaSempre'] == true) {

if (isset($_SESSION['usuarioID']) OR isset($_SESSION['usuarioNome'])) {

if (validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']))  {
header("Location: ".$_SG['paginaIndex']);
}
}
}
}


?>