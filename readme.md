# Aplicación PHP de Gestión de Usuarios

Esta aplicación PHP proporciona funcionalidades para gestionar usuarios, incluyendo el registro, inicio de sesión, edición y eliminación de usuarios. La base de datos subyacente está gestionada en MySQL y puede ser administrada a través de phpMyAdmin.

## Instalación

Clona este repositorio en tu máquina local:
git clone https://github.com/tu_usuario/tu_repositorio.git

## Configura las variables de entorno:
1. Crea un archivo .env en el directorio raíz del proyecto.
2. Define las variables de entorno necesarias en el archivo .env:
    - DB_HOST=
    - DB_USERNAME=
    - DB_PASSWORD=
    - DB_NAME=

## Crea un archivo .gitignore con el siguiente contenido:
    .env

## Importa la base de datos:
Utiliza el archivo login_module_db.sql proporcionado en el repositorio para crear la base de datos y las tablas necesarias en MySQL.

## Configura tu servidor web:
Configura tu servidor web para que apunte al directorio raíz del proyecto.

## Accede a la aplicación:
Abre tu navegador web y accede a la URL de tu servidor web para utilizar la aplicación.

## Uso
    - Registro de Usuarios: Los usuarios pueden registrarse proporcionando su nombre, correo electrónico, teléfono y contraseña.
    - Inicio de Sesión: Los usuarios pueden iniciar sesión utilizando su correo electrónico y contraseña.
    - Edición de Usuarios: Los usuarios pueden editar su información personal, incluyendo nombre, correo electrónico, teléfono y contraseña.
    - Eliminación de Usuarios: Los usuarios pueden eliminar su cuenta de usuario de la aplicación.

## Créditos
Este proyecto ha sido desarrollado por dgguzmangr.

## Licencia
Este proyecto está bajo la Licencia MIT. Consulta el archivo LICENSE para más detalles.