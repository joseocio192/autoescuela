## Sobre el proyecto
Este proyecto es para la materia de Programacion Web donde empezamos desde cero a terminar una pagina web funcional
Aqui fotografias del proyecto [aqui](#landing) 

## Pasos para correr el proyecto
### Pasos previos
- instalar php
- instalar mysql o dejar el default del .env que es sqlite
- instalar composer
### Instalar el proyecto
- Clonar el proyecto y moverse ahi
- renombrar el archivo .env.example a .env
- si usara sqlite dejarlo asi, si usara mysql debera poner lo siguiete con sus respectivos datos en el .env
OJO SI SE USA SQLITE TENDRA ERRORES CON ALGUNAS QUERYS
![image](https://github.com/user-attachments/assets/6f31795d-08ad-4ca8-9223-e2e9e3e0838a)
- Ejecutar los siguientes comandos en la carpeta del proyecto
- composer global require laravel/installer
- composer install
- npm install
- npm run build
- php artisan key:generate
- php artisan migrate
- darle yes si usamos sqlite
- php artisan migrate:fresh --seed
- php artisan serve

Ahora el proyecto estaria corriendo correctamente si tienen algun problema pueden dejarlo en los issues :)
el usuario de el profesor es maestro@outlook.com
el usuario de alumno es alumno@gmail.com
la contraseña de ambos es 123546
esta informacion de inicio se puede modificar en [el seeder](https://github.com/joseocio192/autoescuela/blob/master/database/seeders/UserSeeder.php)

### Porque elegi estas tecnologias?
Este proyecto usa laravel, breeze y livewire.
- Laravel, elegi laravel porque el proyecto tenia que incluir PHP, pero ya lo habia elegido antes de eso simplemente porque era con lo que mas me sentia comodo en su momento.
- Elegi livewire ya que ya habia hecho un proyecto con laravel puro [club conquistadores](https://github.com/joseocio192/Club-Conquistadores/) y tenia ganas de hacer algo mas interactivo pero por cuestiones de tiempo no pude invertirle mucho a sus uso mas que para la pagina principal y el horario.


## landing
![image](https://github.com/user-attachments/assets/672ff9a1-bc0d-43c5-81f7-d217d4ace9d7)
![image](https://github.com/user-attachments/assets/28958595-502a-48da-9e6e-5659383207ac)
## Log in
![image](https://github.com/user-attachments/assets/5b36c5fd-522e-4540-9787-397feb96ec32)
## Register
![image](https://github.com/user-attachments/assets/824c68da-2332-48ab-af1a-e7c23411ed2a)
## Vista Alumno sin curso
![image](https://github.com/user-attachments/assets/41d98591-050d-4fd0-bab4-68df1658a9e6)
## Vista Alumno eligiendo curso y hora
![image](https://github.com/user-attachments/assets/340567be-71b0-48ad-aa1c-d5f25c8360b9)
## Inscripcion 
![image](https://github.com/user-attachments/assets/41aa20e4-a9e9-4dda-9d39-d9d6392dbf9e)
