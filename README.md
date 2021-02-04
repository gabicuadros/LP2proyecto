# LABOR SOCIAL

## Aplicacion WEB para gestionar las labores sociales

## Esta aplicación web está dividida en 2 lenguajes de programacion:

- BACKEND: Desarrollo de la API que mantiene conexion a nuestra base de datos desarrollada en PHP con el framework LARAVEL
- FRONTEND: Desarrollo de la vistas en Ruby mediante el framework Ruby on Rails, estas tienen conexion con la API desarrollada en LARAVEL

## Funcionalidades

- Vista general de todas las labores sociales
- Vista individual para visualizar toda la información de la labor social deseada
- Actualizar informacion de labor social
- Eliminar labor social
- Permite ingresar una nueva labor social

## Ejecucion

- BACKEND: Para poner el servidor de Laravel se necesita tener instalado artisan, ya que se necesita poner el comando php artisan serve para levantar el servidor va este sera alojado en el puerto 8000, es necesito el uso de mysql y phpadmin, y poner la configuracion necesaria de mysql dentro de la carpeta config database.php

- FRONTEND: Se necesita tener instalado rails para levantar el servidor, con el comando rails s, por defecto estara en el puerto 3000

## Rutas FRONTEND

- Visualizacion de datos: http://localhost:3000/laborsocial
- Visualizacion por id: http://localhost:3000/laborsocial/:id
- Creacion de un nuevo elemento: http://localhost:3000/laborsocial/new
- Actualizar registro por id: http://localhost:3000/laborsocial/:id/edit

## API BACKEND

- GET de todos los datos: http://localhost:8000/api/laborsocial
- GET por id: http://localhost:8000/api/laborsocial/:id
- POST creacion de nuevo registro: http://localhost:8000/api/laborsocial
- PUT actualizacion de registro: http://localhost:8000/api/laborsocial/:id
- DELETE eliminar un registro: http://localhost:8000/api/laborsocial/:id
