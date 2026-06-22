<?php

$matricula = $_POST['matricula'] ?? '';
$cedula = $_POST['cedula'] ?? '';
$usuario = $_POST['usuario'] ?? '';
$dominio = $_POST['dominio'] ?? '';
$password = $_POST['password'] ?? '';

echo "<h1>Registro completado</h1>";

echo "<p><strong>Matrícula:</strong> $matricula</p>";
echo "<p><strong>Cédula:</strong> $cedula</p>";
echo "<p><strong>Usuario:</strong> $usuario</p>";
echo "<p><strong>Correo:</strong> $dominio@gmail.com</p>";

echo "<p>Usuario registrado correctamente.</p>";
?>