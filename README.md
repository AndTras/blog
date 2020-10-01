<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Blog

Este es un proyecto de prueba desarrollado en laravel y vue. para el adecuado funcionamiento de este proyecto necesitas tener:

PHP 7.3 o superior. 

Tener instalado componer

## Installation

1. Descarga el repositorio usando el siguiente comando.

```bash
git clone https://github.com/AndTras/blog.git
```

2. Ingresa al directorio que se descargo he instala las librerias del proyecto.

```bash
composer install
```

## Configuración

1. Necesitas configurar la base de datos en el .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
```
2. Necesitaremos tener instalado mysql para este caso. una vez tengamos el servicio de mysql activo ejecutamos el siguiente comando para crear la base de datos.
```bash
CREATE DATABASE blog;
```
3. Ahora correremos las migraciones, las cuales crearan las tablas de la base de datos.
```bash
php artisan migrate;
```
4. Si quieres poblar la base de datos con datos ficticios puedes usar tinker. Ejecutando el siguiente comando:
```bash
php artisan tinker;
```
5. Una vez tengas tinker abierto en consola ejecuta el siguiente comando para crear 5 autores:
```bash
 autor::factory()->count(5)->create();
```
6. Ahora crearemos 25 post con el siguiente comando:
```bash
 post::factory()->count(25)->create();
```
7. Por ultimo correremos el siguiente comando para abrir el blog en un host
```bash
 php artisan serve
```
