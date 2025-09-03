# C.A.I-GESTION

## Introducción

C.A.I-GESTION es una aplicación web diseñada para la gestión integral de procesos administrativos y operativos, desarrollada con Symfony como framework backend, Docker para la contenerización y MySQL como sistema de base de datos. Este proyecto busca facilitar la organización, seguimiento y control eficiente mediante una arquitectura moderna, segura y escalable.

El proyecto utiliza Docker Compose para orquestar los servicios, incluyendo un contenedor PHP con Apache, la base de datos MySQL y phpMyAdmin para administración visual. La aplicación está estructurada para soportar el desarrollo ágil y la fácil integración de nuevas funcionalidades.

---

## Equipo de Desarrollo

- Ximena Celis
- Sofia Vega
- Joseph Vega
---

## Tecnologías y Herramientas

- **Backend:** Symfony 7.x (PHP 8.2)  
- **Base de datos:** MySQL 8  
- **Contenerización:** Docker y Docker Compose  
- **Servidor web:** Apache 2.4  
- **Herramientas de administración:** phpMyAdmin  
- **Gestión de dependencias:** Composer  
- **Control de versiones:** Git y GitHub  

---

## Arquitectura y Estructura del Proyecto

- El código fuente se aloja en la carpeta `/app`, mapeada al contenedor PHP para desarrollo en tiempo real.  
- El contenedor PHP corre Apache con el módulo `mod_rewrite` habilitado para URLs amigables y soporte de Symfony.  
- MySQL corre en un contenedor independiente con volúmenes persistentes para asegurar la integridad de los datos.  
- phpMyAdmin está configurado para facilitar la administración y visualización de la base de datos.  
- El proyecto está preparado para despliegue local y escalable a entornos de producción con mínimos ajustes.  

---

## Instalación y Uso

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/Nelixao/C.A.I-GESTION.git
   cd C.A.I-GESTION
