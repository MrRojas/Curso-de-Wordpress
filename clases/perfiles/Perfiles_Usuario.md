# Gestión de usuarios básica


WordPress nos permite gestionar los usuarios asignando nuevos diversos roles. Los roles que podemos tener son:

*	Suscriptor: Solo consulta, no puede gestionar.
*	Colaborador: Puede crear contenido pero no puede publicarlo. UNA VEZ PUBLICAN SU CONTENIDO NO LO PUEDE GESTIONAR.
*	Autor: Puede crear contenido y publicarlo. TAN SOLO PUEDE GESTIONAR SUS CONTENIDOS PROPIOS.
*	Editor: Puede crear contenido, publicarlo. CUALQUIER CONTENIDO DISPONIBLE EN EL SITIO. No tiene acceso a funciones de configuración con Temas, Plugins y Ajustes
*	Administrador. Gestiona el sitio a nivel completo.


## Restricción de contenidos


Con la instalación del plugin de Simple Membership vamos a poder cambiar asignar el tipo de acceso que queremos dependiendo del tipo de usuario que accede a nuestro sitio. La forma en la que administramos esto es a través de niveles de membresía, en los que definimos el contenido y los accesos a los que los usuarios tienen permisos de entrada.


## Creación de nuevos roles de usuario - aplicado al proyecto

Debido al tipo de proyecto que estamos desarrollando es necesario tener roles que son diferentes, para esto vamos a crear un usuario que sea un viajero y que pueda modificar su información dentro de la plataforma. Esto lo podemos modificar dentro de la carpeta de functions.php, allí le podemos dar a nuestros usuarios el tipo de acciones que puede realizar.

La creación de roles se hace en el fichero functions.php.

### Funciones necesarias:

remove_rol para que lo actualice si el rol ya existe.
add_rol para añadir el rol con los permisos necesarios.
add_action (‘init’, ‘funcion_que_crea_el_rol’); para añadir al tema.
Permite explotar el plugin Simple Membership de una forma más concreta y particular, además de crear usuarios con roles y funcionalidad específica.