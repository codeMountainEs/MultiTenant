
composer create-project laravel/laravel:^10.0 MultiTenant

composer require filament/filament:"^3.2" -W

php artisan filament:install --panels



Borro AdminPaneel 

php artisan make:filament-panel company


php artisan make:model Company -ms 

# Ajustar panel de empresas, autenticación, y primera versión funcional

user
CompanyPanelProvider
auth.php 
seeder ...

# Configuración para que cada empresa pueda gestionar sus riders
php artisan make:model Rider -ms 

completar migracion rider
añadimos companies_tables  companies_riders
    relaccion muchos a muchos 
    empresas manejan sus riders

* Models Riders 
    companies belongsToMany
* Models Companis la inversa 


* Gestionar panel de empresas los riders  
php artisan make:filament-resource Rider --panel=company 

* quien es el owner ... 
    sobreescribir en resource ...
    $tenenatOweners

* RiderResource haceos form y table para crear riders ..

    GESTIONAR SUS PROPIOS PRODUCTOS IGUAL ... 

    CREAR PANEL DE RIDERS TAMBI PARA GESTOIONAR ...

    Eliminar Riders .. en tabla pivote .. 
        borrar primero de la tabla pivote 
            RiderTesoruce.php Action  
                solo 

# Hacer que los riders puedan identificarse en su propio panel


* Modelo Rider como modelo usuario 
    rider.php  replica del modelo user.php 

    migration riders .. 

    Auth.php guard .. añadimos riders 
    passowrd 

* creamos panel para riders 
php artisan make:filament-panel rider 

color , path , login , passowrResert

php artisan migrate:fresh --seed 

RiderSeeder.php 
DatabseSeedr añadimos 


EMPRESAS 
    RIDIRES
        TAREAS

OBRAS
    PROVVEDORES
        TAREAS 
    
EMPRESAS    
    PROVEEDORES
        FACTURAS
    CLIENTES
        FACTURAS

EMPRESAS
    CONDUCTORES
        RUTAS
            RECOGIDAS



        