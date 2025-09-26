# Blog VED

Este proyecto es una aplicación web desarrollada con Laravel que funciona como un blog técnico. Permite la gestión de publicaciones, edición, eliminación y visualización de posts, así como autenticación de usuarios y panel administrativo.

## Características principales

-   CRUD de publicaciones (crear, editar, eliminar, listar)
-   Autenticación y verificación de usuarios
-   Panel de administración protegido
-   Diseño responsivo con Tailwind CSS y Alpine.js
-   Sistema de sesiones y almacenamiento en base de datos

## Dependencias principales

-   **Laravel Framework**: ^12.0
-   **PHP**: ^8.2
-   **Tailwind CSS**: ^3.1.0
-   **Alpine.js**: ^3.4.2
-   **Axios**: ^1.8.2
-   **Vite**: ^6.2.4
-   **@tailwindcss/forms**: ^0.5.2
-   **laravel-vite-plugin**: ^1.2.0
-   **barryvdh/laravel-debugbar**: ^3.15 (dev)
-   **laravel/breeze**: ^2.3 (dev)
-   **pestphp/pest**: ^3.8 (dev)

Puedes ver todas las dependencias y versiones en [composer.json](composer.json) y [package.json](package.json).

## Requisitos previos

-   PHP >= 8.2
-   Composer
-   Node.js y npm o Yarn
-   SQLite (por defecto) o MariaDB/PostgreSQL si configuras `.env`

## Instalación y ejecución en desarrollo

1. **Clona el repositorio**

    ```sh
    git clone https://github.com/VedGarcia/blog-ved.git
    cd blog-ved
    ```

2. **Instala dependencias de PHP**

    ```sh
    composer install
    ```

3. **Instala dependencias de JavaScript**

    ```sh
    npm install
    # o
    yarn install
    ```

4. **Copia el archivo de entorno y configura variables**

    ```sh
    cp .env.example .env
    # Edita .env según tu entorno (APP_URL, DB_CONNECTION, etc.)
    ```

5. **Genera la clave de la aplicación**

    ```sh
    php artisan key:generate
    ```

6. **Ejecuta las migraciones**

    ```sh
    php artisan migrate
    ```

7. **Levanta el servidor de desarrollo**

    ```sh
    php artisan serve
    ```

8. **Compila los assets**
    ```sh
    npm run dev
    # o
    yarn dev
    ```

Accede a la app en [http://localhost:8000](http://localhost:8000).

---

Para más detalles revisa la documentación de Laravel en [https://laravel.com/docs](https://laravel.com/docs).
