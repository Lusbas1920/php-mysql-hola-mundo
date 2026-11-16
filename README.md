
# PHP + MySQL - Hola Mundo

Aplicación web desarrollada en PHP conectada a una base de datos MySQL mediante Docker Compose.

## Tecnologías
- PHP 8.3
- Apache
- MySQL 8.0
- Docker Compose

## Estructura del proyecto

    php-mysql-hola-mundo/
    ├── src/
    │   └── index.php
    ├── Dockerfile
    ├── docker-compose.yml
    └── README.md

## Cómo ejecutar

1. Clonar el repositorio.
2. Abrir la carpeta del proyecto.
3. Ejecutar:

    docker compose up -d --build

4. Abrir http://localhost:8080

## Base de datos
- Servidor: db
- Base de datos: hola_mundo
- Usuario: root

La aplicación muestra un mensaje de bienvenida cuando la conexión con MySQL es exitosa.
