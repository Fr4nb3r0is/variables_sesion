# Se reubico y ordeno todo tipo de codigo. 
este mismo se subdividio en carpetas para un mayor uso. Ademas se cambio nombre de "Formulario.html" A "index.html" 
para formalizar una entrada mas comoda del mismo.


#


# Variables de Sesión en PHP - Ejemplo Educativo

Este proyecto contiene ejemplos simples para aprender a usar **variables de sesión** en PHP.

## 📋 ¿Qué son las Variables de Sesión?

Las variables de sesión permiten **guardar información del usuario** que se mantiene disponible mientras navega por diferentes páginas del sitio web. Esta información se almacena en el servidor y se identifica con un ID único de sesión.

## 🗂️ Archivos del Proyecto

| Archivo | Descripción |
|---------|-------------|
| `formulario.html` | Formulario HTML simple para capturar datos del usuario |
| `procesar.php` | Procesa el formulario y guarda los datos en variables de sesión |
| `ver_sesion.php` | Muestra todas las variables de sesión activas |
| `destruir_sesion.php` | Elimina todas las variables de sesión |

## 🚀 Cómo usar el proyecto

### 1. Requisitos
- XAMPP, WAMP o cualquier servidor con PHP
- Navegador web

### 2. Instalación
1. Copia la carpeta `variables_sesion` a tu directorio web (ej: `htdocs` en XAMPP)
2. Inicia tu servidor web
3. Ve a: `http://localhost/variables_sesion/formulario.html`

### 3. Flujo de uso
1. **Llena el formulario** en `formulario.html`
2. **Envía los datos** (se procesarán en `procesar.php`)
3. **Ve las variables** guardadas en `ver_sesion.php`
4. **Destruye la sesión** cuando termines con `destruir_sesion.php`


