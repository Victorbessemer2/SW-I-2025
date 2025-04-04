<?php
$email_correto = "victor@gmail.com";
$senha_correta = "123456";

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email === $email_correto && $senha === $senha_correta) {
    header("Location: bemvindo.php");
} else {
    header("Location: erro.php");
}
?>