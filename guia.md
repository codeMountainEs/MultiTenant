
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


# Actualizar resource de riders para que las empresas puedan gestionar todos sus datos

*RiderResource form 
    rider email unico 



# Modelo y migración de Tasks para que los riders gestionen sus tareas

php artisan make:model Task -m 

modelo para que los riders puedan imputar su trabajo 

migration tasks , nombre , color company rider 

* Model -> task 
    booted cuando el modelo este listo añadimos un globalscope 
        todas las consultas van por el rider = usuario identificado ... 

        a parte que por la compani que lo hace larave filament ...


    owner() info de tareas pertenece a un owner .. sacar las tareas de la emprea...

    rider()  datos del rider 

* Model company 
    tasks() hasMany 

php artisan migrate:fresh --seed 










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



        