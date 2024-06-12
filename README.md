# CriticalWeb
Una pagina dedicada a organizar tu plantel de alumnos. Podes registrar las asistencias, ver los proximos cumpleaños, dividirlos por año y grupo. Mas funciones en los proximos parches ;D

### Pasos para la Instalación

Antes de comenzar, debes tener instalado en tu sistema:

- Composer ([instrucciones de instalación](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos))
- Laravel ([instrucciones de instalación](https://laravel.com/docs/8.x/installation))

1. Clona este repositorio en tu computadora desde Github:


    https://github.com/piamelgarejo/laravel-10-crud.git

    O bien si tienes descargado GitHubDeskop presiona la opción 

    Open with GitHub Desktop


2. Navega hasta el directorio del proyecto desde la terminal:


    cd laravel-10-crud


3. Instala Composer desde la terminal:


    composer install


4. Copia el archivo de configuración `.env.example` y renómbralo como `.env`:


    cp .env.example .env


5. Genera una clave de aplicación única:


    php artisan key:generate

6. Crea una base de datos local en el motor MySql de tu preferencia.

7. Configura tu base de datos en el archivo `.env` según la creación anterior de la base de datos local:


    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos
    DB_USERNAME=usuario_de_tu_base_de_datos 
    DB_PASSWORD=password_de_tu_base_de_datos


8. Ejecuta las migraciones para crear las tablas en la base de datos:


    php artisan migrate


9. Ejecuta el servidor de desarrollo de Laravel:


    php artisan serve


11. npm run dev 

10. Realiza un php artisan db:seed

11. Abre tu navegador web y visita `http://localhost:8000` para ver la aplicación en funcionamiento.
