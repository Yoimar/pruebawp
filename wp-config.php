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
define('DB_NAME', 'pruebawp');

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
define('AUTH_KEY', 'GiBwYJq!^/}Bfg%-h3lC<pkQQ7ag_7g/ST5Y<6!4XX0xOmw&tt-vdUT.NX,Z93pT');
define('SECURE_AUTH_KEY', 'LhIzHAhqnyFO^ni1XZHu)8Rd2:V(Nc/A3X=@JC$K|7sevRyH qx {Q@kR#_>;eG|');
define('LOGGED_IN_KEY', '!unaGOX-*fJgHNRd$Bi*9k%hy$&* D=:*&:lu8X9~Z@q EK,XQ9 p`34u6Rnd|/g');
define('NONCE_KEY', 'EV`p~dCMv`,!V;`h&N7(6Yzrl9u1S2N%fR6]8~xGMa+~BS[k(xr^J_NxV`U[4rH4');
define('AUTH_SALT', '{P^`jR3YrP3NzbC|a5b.QK;xh+zw!=E5uTPO<`)8DW.@ase/d/}6At|v/QuMKb^x');
define('SECURE_AUTH_SALT', ':-*cCp0Xv4PF,bic8j?:BC;6>GhA 4Ij|F1.CxrVWp2VNPV`lK{bN^}m=3o`5iWx');
define('LOGGED_IN_SALT', 'slM$r+lw:dR2X=M?Qp4*Ry,M{x.r00B:%k6d)?tFXSJurWqe8Uml=JF!mGNB+cOA');
define('NONCE_SALT', 'yK[2SalpDC-B:>0P{xlc`E$RBoM>ymSN$N|~QsYvfmtA,L*R9P>05e-kn9t7x(o;');

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

define  ('WPLANG', 'es_VE');

