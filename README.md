# Evaluación 1 - Paradigmas de Programación (Fase III)
PNF en Informática - UPT Aragua "Federico Brito Figueroa"

## Datos del Proyecto
Enunciado 3 - Control de Mascotas.
Profesor: Elías Vargas.
Fecha de Entrega: 06 de Febrero de 2026.

# Integrantes
[ALVARO RONDON] - CI: [31.266.292]
[ANGEL MARTINEZ] - CI: [31.363.737]

Tecnologías Utilizadas
Framework: Laravel 12
Lenguaje: PHP 8.3
Base de Datos: SQLite
Frontend: Blade & Bootstrap 5

Instrucciones de Instalación:

Si deseas ejecutar este proyecto localmente, sigue estos pasos:

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/AlvaroRondon23/Evaluacion1-P-RondonAlvaro-MartinezAngel.git
   cd Evaluacion1-P-RondonAlvaro-MartinezAngel

2. Instalar dependencias PHP:
   ```bash
   composer install

3. Copiar .env y configurar:
   ```bash
   cp .env.example .env # Linux / macOS
   # En PowerShell: Copy-Item .env.example .env
   
   Editar .env y configurar la base de datos:

   ```env
      DB_CONNECTION=sqlite
      DB_DATABASE=database/database.sqlite

4. Generar APP KEY:
   ```bash
   php artisan key:generate

5. Crear el archivo de DB (Sqlite):
   ```PowerShell
   New-Item -ItemType File -Path .\database\database.sqlite -Force

6. Migrar la base de datos y ejecutar seeders:
   ```bash
   php artisan migrate:fresh --seed

7. Limpiar caches (si fuera necesario):
   ```bash
   php artisan config:clear
   php artisan cache:clear
   php artisan view:clear
   composer dump-autoload

8. Levantar servidor de desarrollo:
   ```bash
   php artisan serve

