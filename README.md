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
   ```

2. Levantar el entorno con Docker (primera vez puede tardar):

   ```bash
   docker compose up -d --build
   ```

3. Instalar dependencias dentro del contenedor app (si aplica):

   ```bash
   docker compose exec php composer install
   ```

4. Ejecutar migraciones y cargar datos iniciales (usuarios demo):

   ```bash
   docker compose exec php php bin/console doctrine:migrations:migrate -n
   docker compose exec php php bin/console doctrine:fixtures:load -n
   ```

   Nota: Si experimentas el error "SQLSTATE[22001]: Data too long for column 'file_path'", asegúrate de haber aplicado todas las migraciones recientes. A partir de la versión 20251015000001, se amplían los campos file_path a VARCHAR(255) para evitar truncamientos.

5. Acceder a la aplicación en el navegador:

   - URL: http://localhost/
   - Credenciales de prueba:
     - Administrador: admin@example.com / admin123
     - Usuario: usuario@example.com / usuario123

### Roles
- ROLE_USER: acceso general a las secciones de la app.
- ROLE_ADMIN: acceso adicional a Administración → Usuarios y Roles.

La aplicación fuerza autenticación para todas las rutas excepto /login. El enlace "Ingresar/Salir" aparece en la barra superior. En el menú lateral, las opciones de Administración solo se muestran a usuarios con ROLE_ADMIN.


---

## Autenticación: Registro y Recuperación de contraseña

- Registro: disponible en /register. Permite crear un usuario con nombre, correo y contraseña. La contraseña se almacena hasheada y el usuario obtiene acceso con ROLE_USER.
- Iniciar sesión: /login.
- Olvidé mi contraseña: /forgot-password. Muestra un formulario para ingresar el correo y confirma la recepción. Implementación mínima: no envía correos todavía.

Visibilidad de rutas sin autenticación (PUBLIC_ACCESS): /login, /register y /forgot-password.
