<?php
require_once("../app/config.php");

$email      = $_POST['email'];
$password   = $_POST['password'];

$sql    = "SELECT * FROM usuarios WHERE user_email ='$email' AND estado = TRUE;";
$query  = $pdo->prepare($sql);
$query->execute();

$usuarios    = $query->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;
foreach ($usuarios as $usuario) {
    $pass_form = $usuario['user_pass'];
    $contador  = $contador + 1;
}
echo $contador;

if ( ($contador>0) && (password_verify($password,$pass_form))){
    echo "los datos son correctos";
    session_start();
    header('Location:'.APP_URL."/admin");
    $_SESSION['mensaje'] = 'Bienvenido';
    $_SESSION['icono'] = 'success';
    $_SESSION['email'] = $email;
    }else{
    echo "los datos son incorrectos";
    session_start();
    $_SESSION['mensaje'] = 'Los datos introducidos son incorrectos, vuelva a intentar';
    header('Location:'.APP_URL."/login");
}