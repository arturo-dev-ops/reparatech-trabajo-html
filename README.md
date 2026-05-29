-- Active: 1777320170376@@127.0.0.1@3306
# ReparaTech - Gestión de Reparaciones y Mantenimiento Electrónico

**Aplicación Full Stack con infraestructura optimizada (PHP, MySQL y Apache)**

---

## 📋 Información del Repositorio

**URL del proyecto en GitHub:** [https://github.com/Aja1702/reparatech-trabajo-html](https://github.com/Aja1702/reparatech-trabajo-html)

---

## 📖 Descripción del Proyecto

**ReparaTech** es una solución web responsive orientada a la gestión y administración de un taller de reparación técnica de dispositivos electrónicos. El proyecto combina frontend HTML/CSS con backend PHP y MySQL, aplicando buenas prácticas de seguridad y separación de responsabilidades.

### Características Clave:

- **PHP + MySQL:** Gestión de clientes, reparaciones y formularios con backend en PHP.
- **Seguridad:** sentencias preparadas PDO para consultas parametrizadas.
- **Nota:** El proyecto no incluye sistema de usuarios ni almacenamiento de contraseñas; se eliminaron tokens CSRF y ejemplos de hashing.
- **Frontend estructurado:** páginas PHP generadas con HTML en la raíz y en el directorio `nav/`, con estilos centralizados en `css/styles.css`.
- **Separación de responsabilidades:** lógica de negocio en `php/`, datos en `sql/`, vistas en `nav/`.

---

## 📁 Estructura del Proyecto

```text
reparatech-trabajo-html/
│
├── index.php                    # Página principal del sitio web
│
├── css/
│   └── styles.css                # Estilos globales del sitio
│
├── docs/
│   ├── politica.php
│   ├── presupuesto-enviado.php
│   └── terminos.php
│
├── img/                          # Imágenes usadas en la web
│
├── nav/                          # Páginas de navegación secundarias
│   ├── contacto.php
│   ├── presupuestos.php
│   └── productos.php
│
├── php/                          # Backend PHP
│   ├── db_connection.php         # Conexión centralizada mediante PDO
│   ├── business_logic.php        # Controlador y procesado de la lógica de negocio
│   ├── clientes_view.php         # Vista dinámica de administración de clientes
│   ├── procesar_formulario.php   # Procesamiento de envíos de formularios
│   └── php.ini                   # Ajustes del entorno de ejecución de PHP
│
├── sql/
│   └── schema.sql                # Definición de tablas, relaciones y restricciones
│
├── .htaccess                     # Directivas de Apache para caché y optimización
└── README.md
```
