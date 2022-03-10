<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'veilletechwp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MBxhK4ysE6pB?65 _z_!zw9u3n<0/(jP3-htZ$u(8JS)Jy3iA`~~D{:c!?me^36:' );
define( 'SECURE_AUTH_KEY',  'du.TBZSOT;TXu 7yhx7>)R@l1:Cafwb!r[(PZ8uw}dZl}6lYWf:8vo]P(]d96QfZ' );
define( 'LOGGED_IN_KEY',    '}j(rOa^/i1,igivS2Bx>C?9z<zi[ >@MB@UMxU>H9rE;) 9+wi)?</fmFl3owK(l' );
define( 'NONCE_KEY',        'vSU@F,aM> fvRp(f:dTV?h[2J=y_5HE:N7^&G,lw~|OVrsw0~9uzTn|SRmz1Dm7<' );
define( 'AUTH_SALT',        'F$.@Zeo#YolPam2mknkbV+:-SwcM.cO~N,fX(up0N4sMj])j2Ml n>Mygk`YSf D' );
define( 'SECURE_AUTH_SALT', '&@0N.tMPB7m-dSxFQP,(cV 380]6r}Ce!?@T5SsIR.[S:u2D/XPuE<p%$yaa1sXd' );
define( 'LOGGED_IN_SALT',   '&%-_xL$M@8XC88/07bg>uE?-v#[upn;H[2&n#w(S,-s1fEaM=4UfCK](x9?Xoa9A' );
define( 'NONCE_SALT',       'n%m~}SP>RJR@F@rbe4~b#yI/bD/)-F[dlS$Azy]91(vFKGElS]<0Zf/AL:Rms)[(' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

/** supprimer le menu edition de code */
define('DISALLOW_FILE_EDIT',true);