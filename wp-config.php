<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'makeup');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SPhFi[nc*ZQp&C2WVb[^5;{RZMU2H M@=WqZGn_ggv4)EQl.PZB`4Wews:WVaeZ[');
define('SECURE_AUTH_KEY',  'RS!J+C{G?&-t59iti|(u!#t)@zyF(a|3BoEFQ6 u[Rco~+e&`Q|S[sDOJf +28VN');
define('LOGGED_IN_KEY',    'E6QM0FqEPIXr~E/@r( k$O9oZ.EHr7k|KOHa@~MvMG-#K_VQr1DNHwS{?0,UdRO?');
define('NONCE_KEY',        ']_#rEzbyTpH@=kx2]PHVfu&0-1-n3/Pu%bUI!?g 8w4[xg/5|$ I<<9m76U`6 -$');
define('AUTH_SALT',        'MU0qQ$be5`V;)wh*_SlMK[Qa]s#G2=rpafbNMr;Ad?EoZ>:Ne1rp |dHg9IQ6.mp');
define('SECURE_AUTH_SALT', 'FPEC:?/|Xo&KwKKf;bF7)cE5WdTwDP78}8F3~Uh}E|r^74>]A[-1s{%tSKmqEw?2');
define('LOGGED_IN_SALT',   'N1R,9vlzl?B{OA7SF2-J!NQq$b*ZLGw@f|E$z|4FpqwO;/Jt[cG3I5]9$LW:N]([');
define('NONCE_SALT',       'nE){GY&w*?nqdB3/2eQTRwsQb4bP5%Rybw71s>Y~Y!joGAWYB1>yg,|y1:GgS|ad');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
