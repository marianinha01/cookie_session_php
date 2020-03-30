<?php
session_start();
 if(isset($_POST['user']) && !empty($_POST['User']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    $conf = $_POST;
    $_SESSION['session'] = $conf;
    $usuario = $_POST['user'];
    $senha = $_POST['senha'];
    echo "SEU EMAIL:";
    echo "<h4>$usuario<h4>";
}
else{
    echo"<h2>DIGITE SEU EMAIL E SENHA<h2>";
}
?>
<a href="index.php"><button> EDITAR EMAIL </button></a>

<?
header('Status: 301 Moved Permanently', false, 301);
header('Localização: http://localhos/cookie_session_php/session/session.php');
exit();
?>