# 🚀 CRUD Usuarios - Laravel 11 (Futuristic Edition)

Este es un proyecto de gestión de usuarios desarrollado con **Laravel 11**, diseñado con una estética futurista y minimalista. Utiliza efectos de **Glassmorphism** y una paleta de colores Dark Mode con acentos en Cyan y Ámbar para ofrecer una experiencia de usuario moderna y limpia.

---

## 📸 Vista Previa
![Diseño del Panel](https://via.placeholder.com/800x400?text=Vista+del+Panel+Futurista+de+Cristian) 
*(Nota: Aquí puedes subir tus capturas de pantalla a la carpeta 'public' y poner el link real)*

## 🛠️ Tecnologías y Herramientas
* **Framework:** Laravel 11.x
* **Entorno:** [Laravel Herd](https://herd.laravel.com/) (Zero-config local development).
* **Estilos:** [Tailwind CSS](https://tailwindcss.com/) via CDN.
* **Base de Datos:** MySQL (gestionada a través de Herd/DBngin).
* **Lenguajes:** PHP 8.2+, HTML5, CSS3.

## ✨ Características Principales
* **Full CRUD:** Crear, Leer, Editar y Eliminar usuarios de forma dinámica.
* **UI Futurista:** * Fondos con desenfoque (backdrop-filter).
    * Bordes de neón responsivos.
    * Tipografía limpia y profesional.
* **Arquitectura MVC:** Separación clara entre Modelos, Vistas y Controladores.
* **Mass Assignment:** Configuración de seguridad en el modelo `User`.

## 🚀 Instalación Local

Si quieres clonar este proyecto y probarlo en tu máquina:

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/cristianvelascoinfo-pro/crud-usuarios-laravel-CVlsco.git]
    cd crud-usuarios
    ```

2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Configurar variables de entorno:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Configurar Base de Datos:**
    Abre tu archivo `.env` y asegúrate de que los datos de `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD` coincidan con tu configuración local.

5.  **Ejecutar Migraciones:**
    ```bash
    php artisan migrate
    ```

6.  **Lanzar la aplicación:**
    Si usas Herd, simplemente entra a `http://crud-usuarios.test`. Si no, usa:
    ```bash
    php artisan serve
    ```

## 🎥 Contenido Educativo
Este proyecto fue creado como parte de un tutorial técnico para demostrar la facilidad de uso de **Laravel 11** y el potencial de diseño de **Tailwind CSS**.

---
**Desarrollado por [Cristian]** *Si te sirvió este proyecto, ¡no olvides darle una ⭐ en GitHub!*