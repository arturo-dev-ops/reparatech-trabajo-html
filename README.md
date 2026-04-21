# ReparaTech - Reparación y Mantenimiento de Electrónica

**Sitio web con backend en PHP y base de datos MySQL**

---

## 📋 Información Requerida para la Corrección

### Repositorio GitHub

**URL del repositorio público:** :
[https://github.com/Aja1702/reparatech-trabajo-html](https://github.com/Aja1702/reparatech-trabajo-html)

---

## 📖 Descripción del Proyecto

Sitio web responsive para **ReparaTech**, una empresa ficticia especializada en reparación y mantenimiento de ordenadores, portátiles, móviles y dispositivos electrónicos. Ahora el proyecto incluye:

- **Backend en PHP**: Manejo de formularios, conexión a base de datos y lógica de negocio.
- **Base de datos MySQL**: Tablas para clientes, dispositivos, incidencias y auditoría.
- **Seguridad**: Protección contra CSRF, manejo seguro de contraseñas con `password_hash` y `password_verify`.
- **Optimización**: Configuración de PHP y Apache para hardware limitado.
- **Buenas prácticas**: Separación de lógica y vistas, cumplimiento de estándares PSR.

---

## 📁 Estructura del Proyecto

reparatech-trabajo-html/  
│
├── index.html # Página principal (3 secciones)
├── productos.html # Galería de servicios
├── php/  
│ ├── db_connection.php # Conexión centralizada a la base de datos
│ ├── password_management.php # Manejo seguro de contraseñas
│ ├── csrf_protection.php # Protección contra CSRF
│ ├── business_logic.php # Lógica de negocio
│ ├── clientes_view.php # Vista de clientes
├── sql/  
│ ├── schema.sql # Esquema de la base de datos
├── .htaccess # Configuración optimizada para Apache
├── php.ini # Configuración optimizada para PHP

---

## ⚙️ Instrucciones de Instalación

1. **Requisitos previos**:
   - Servidor web Apache con PHP 7.4 o superior.
   - MySQL o MariaDB.

2. **Configuración del entorno**:
   - Copia el archivo `php/php.ini` en la configuración de tu servidor PHP.
   - Configura Apache para usar el archivo `.htaccess` incluido.

3. **Base de datos**:
   - Importa el archivo `sql/schema.sql` en tu servidor MySQL.

4. **Ejecución**:
   - Accede al sitio web desde tu navegador en `http://localhost/reparatech`.

---

## 🚀 Optimización para Hardware Limitado

- **PHP**: Uso de OPcache, límite de memoria ajustado a 128M.
- **Apache**: Compresión de recursos y control de caché para mejorar el rendimiento.

---

## 🛠️ Tecnologías Utilizadas

- **Frontend**: HTML5, CSS3.
- **Backend**: PHP 7.4.
- **Base de datos**: MySQL.
- **Servidor**: Apache con Lubuntu.

---

## 📱 Vista Previa

**Página Principal**

[Header con logo y menú]
Bienvenidos a ReparaTech
Nuestros Servicios | Por qué elegirnos
[Footer con redes sociales]

**Galería de Servicios** (Responsive Grid)

Reparación Ordenadores | Mantenimiento | Recuperación Datos | Actualización Componentes

---

## ✅ Cumplimiento de Criterios de Evaluación

| Criterio                     | Puntuación | Cumplido                                         |
| ---------------------------- | ---------- | ------------------------------------------------ |
| **Estructura del sitio web** | 70%        | ✅ Todas las páginas + navegación + footer común |
| **Estilo**                   | 10%        | ✅ Diseño moderno tecnológico + responsive       |
| **Validación**               | 10%        | ✅ HTML5 validado W3C                            |
| **Estructura código**        | 10%        | ✅ Código limpio, comentado e indentado          |

---

## 👨‍💻 Autor

**Nombre:** [ARTURO JIMÉNEZ APARICIO]  
**Curso:** HTML/CSS - Trabajo Final Obligatorio  
**Fecha:** 30 Noviembre 2025

---

## 📄 Validación

- **HTML**: [Validador W3C](https://validator.w3.org/) - Sin errores
- **Responsive**: Probado en Chrome, Firefox, Safari (Desktop/Mobile)

---