<?php
// Usuario predeterminado
$usuarioValido = "admin";
$gmailValido = "admin";
$passwordValida = "1234";

$usuario = $_POST['usuario'] ?? '';
$dominio = $_POST['dominio'] ?? '';
$password = $_POST['password'] ?? '';

if (
    $usuario === $usuarioValido &&
    $dominio === $gmailValido &&
    $password === $passwordValida
) {
    echo "<h1>Bienvenido $usuario</h1>";
    echo "<p>Inicio de sesión exitoso.</p>";
} else {
    echo "<h1>Error</h1>";
    echo "<p>Usuario o contraseña incorrectos.</p>";
}
?>