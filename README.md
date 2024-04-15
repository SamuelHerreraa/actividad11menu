# Proyecto Laravel con Navegación Activa

Este proyecto es una aplicación web desarrollada usando Laravel, que incluye una estructura de navegación que resalta la página actual para mejorar la experiencia de usuario. La aplicación consiste en varias páginas con una barra de navegación común, un encabezado, y un pie de página que se mantienen constantes a través de todas las vistas.

## Estructura del Proyecto

El proyecto utiliza la arquitectura MVC de Laravel y está organizado de la siguiente manera:

- resources/views/:
  - index.blade.php: Plantilla principal que incluye el navbar, header, y footer.
  - contact.blade.php
  - main.blade.php
  - fotos.blade.php
- public/css/:
  - style.css: Contiene todos los estilos CSS usados en el proyecto.

## Características

- *Navegación Dinámica*: La barra de navegación cambia visualmente para indicar la página actual.
- *Diseño Responsivo*: El diseño es adaptable a diferentes tamaños de pantalla.
- *Reutilización de Componentes*: Las vistas extienden una plantilla base para minimizar la duplicación de código HTML y CSS.

## Cómo Navegar en el Sitio

Para navegar por el sitio:
1. Inicie el servidor Laravel con php artisan serve.
2. Abra un navegador y visite http://localhost:8000/.
3. Utilice la barra de navegación para moverse entre las páginas 'Inicio', 'Fotos', y 'Contacto'.
