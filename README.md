# Desarrollo-web
"Prueba técnica pasantía-Desarrollo web” 
--------------------------------------------------------------------------------------------------------
Primero se instala lo que es Compose install
composer install     
----------------------------------------------------------------------------------------------------------------------------------
Luego se ha creado el proyecto
composer create-project laravel/laravel proyecto
ubicamos la ruta con cd proyecto


--------------------------------------------------------------------------------------------------------

Edita el archivo .env para configurar la conexión a la base de datos (USADO PHPMYADMIN)

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=root
DB_PASSWORD=
--------------------------------------------------------------------------------------------------------
En un dado caso que no se tenga la model de usuario ubicada en (nombre de proyecto)+ app + Models
    php artisan make:model User -m              ---------Desde la consola podemos ejecutar este comando que la creara directamente-----------------
    
--------------------------------------------------------------------------------------------------------

     php artisan make:model Producto -m       ---------En este se creara la model de producto----------
     php artisan make:model Inventario -m     ---------En este se creara la model de Inventario----------

------------------------------------------------------------------------------------------------------------
php artisan migrate                                   teniendo todo se coloca este comando en la consola,no es necesario la creacion de models y demas ya que el proyecto tiene todo ya,
                                                       solo es necesario ejecutar el migrate( php artisan migrate )


------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Autenticación (Laravel Breeze) 
Breeze es más ligero y sencillo,Para este proyecto, usaremos Breeze:

composer require laravel/breeze --dev              --------Empezar por este 
php artisan breeze:install                         ------luego con este
npm install                                         -----Opcional
npm run dev                                         ----------Opcional
php artisan migrate                                  -----------Requerido



----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    php artisan make:controller ProductoController
    
                                                          Estas ya vienen incluidas junto a otras ya colocadas en el proyecto,solo siempre recordar que para cualquier migracion y demas es necesario el (php artisan migrate)
    php artisan make:controller InventarioController
    

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------





TECNOLOGIAS USADAS

LARAVEL(PHP)
Tailwind
CSS
FontAwesome






















