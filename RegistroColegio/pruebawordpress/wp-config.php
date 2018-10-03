<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'pruebawordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Vlg+J}vq^TX9:Q|,p_vTy`gkff)zl53E+PJs w?Y]7lH:b_S.o7h*0@qkR{6pYo5');
define('SECURE_AUTH_KEY', '6|Nxa+-=/?8eY)%$hx>ED,>K>RIl@Yr?oE*m*Y#]@W.j63lqI]D6ryTlQq:Ergu+');
define('LOGGED_IN_KEY', '}%~uQYU,&8Ly.XOj=-%{ES@qW9-jC%:U Rz8t0?&_q6}%m@TX[2*GEgVq*{fTl;A');
define('NONCE_KEY', '4/Zgym13]#GIlNfIg6qQ%6ux#g64S<KZp$7X0w)#`{m.n tl*gh9!h`uUP3RP2Pw');
define('AUTH_SALT', '.b-{f_h?v->+ frm)r<vp-?Y]]b|KV/pjW6A|Fdms5EAwhi@yPsRYmY.^;ML7vE{');
define('SECURE_AUTH_SALT', 'P$f>P.KP^A.f<=:z<t^K:_* OXLzj%8ts(0wioc.:>C9DT9NNqK^=sW7cuMPi|?_');
define('LOGGED_IN_SALT', '@4H$B0hIgL_7&.8i:!DV=ej*)@(3ZBwzw2mnce+1Q4{SUof}@c<kBq[hSC6p^=5{');
define('NONCE_SALT', 'A%qtAPrtZEg:b_zvqRJ%->B$GJ$gv.+K9y)Ghi,gWxvh/{Jr~KP)j)vJ*d4YVD,M');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

