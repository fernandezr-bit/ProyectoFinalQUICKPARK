 Quick Park

- Descripción

Quick Park es una aplicación web desarrollada con el objetivo de facilitar la gestión de los lugares de estacionamiento dentro de una institución. La idea principal es que los usuarios puedan informar cuando dejan libre un lugar para que otras personas sepan que hay un espacio disponible y puedan aprovecharlo.

Este proyecto fue realizado como trabajo académico utilizando tecnologías web tanto del lado del cliente como del servidor.



- Tecnologías utilizadas

* HTML
* CSS
* JavaScript
* PHP
* MySQL
* XAMPP



-Instalación

Para ejecutar el proyecto es necesario tener instalado XAMPP o cualquier servidor que permita utilizar PHP y MySQL.

1. Descargar la carpeta del proyecto.

2. Copiar la carpeta del proyecto dentro de:


C:\xampp\htdocs\


3. Abrir XAMPP e iniciar Apache y MySQL.

4. Crear la base de datos desde phpMyAdmin e importar el archivo SQL del proyecto.

5. Verificar que los datos de conexión en `conexion.php` sean correctos.

6. Abrir el navegador e ingresar a:


http://localhost/QuickPark




- Uso

Una vez iniciado el proyecto, el usuario puede registrarse e iniciar sesión.

Después de ingresar, podrá utilizar las funciones disponibles para informar lugares libres de estacionamiento y consultar los espacios disponibles.



- Estructura del proyecto


QuickPark
│
├── css
├── js
├── img
├── php
├── index.php
├── login.php
├── registro.php
├── conexion.php
└── README.md


La estructura puede variar dependiendo de la versión del proyecto.

- Licencia

Este proyecto fue desarrollado únicamente con fines educativos.

Puede utilizarse como referencia para aprender, modificarlo o adaptarlo a otros proyectos siempre respetando la autoría correspondiente.



- Recursos visuales

* Pantalla de inicio.
* Inicio de sesión.
* Registro de usuarios.
* Vista principal del sistema.




- Ejemplos de código

Conexión a la base de datos.

php
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión");
}


Validación de un formulario.

javascript
if (usuario == "" || contraseña == "") {
    alert("Debe completar todos los campos.");
}




- Posibles mejoras

* Notificaciones en tiempo real.
* Panel de administración.
* Historial de estacionamientos.
* Recuperación de contraseña.
* Estadísticas de uso.
* Reserva de lugares.



- Autor

Prime Code (Rodrigo Fernández, David Astor, Maite Silva y Zoe Lucero)

Proyecto realizado para la asignatura de Desarrollo Web.
