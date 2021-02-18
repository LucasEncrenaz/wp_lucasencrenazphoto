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
define( 'DB_NAME', 'lucasencrenaz' );
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );
/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );
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
define( 'AUTH_KEY',         '*[J/Po]W1LQ+}`/At?CSit0%z0TXiO)6m][@Yqm;UpLu8Gfv&p>(LT3}&|bjN<}8' );
define( 'SECURE_AUTH_KEY',  'dEB$Y_Q<8HV*F[w|&ST&)>)id$3-wnI(,JVng-#(=a m.t(6Hqi4au$6t2E0<i/W' );
define( 'LOGGED_IN_KEY',    '_;v9-?/g$S,MB|6{0taEU >{tv0Jg*hIA;#f[x9UGh]Y_S-I8QTZy[/oDeG0f&WJ' );
define( 'NONCE_KEY',        'K5V{k%$j/rs;AVd[+9I*@~[esu)12z|A`WoK(rS.#t_#73X6|5|H<uH->y.~@9Q&' );
define( 'AUTH_SALT',        '$$/M0}Or!&[S`(Jd+ay$0UV,<eCUX.#{%-LRd9,^h=u3SGZ3_JeOlAAV{b[eXeF:' );
define( 'SECURE_AUTH_SALT', 'c7{c=Mu-Pb,wu@2<NxzksP>XW)J>!(gch<K?jQ24u/g?,}n,Tt$R;M~Y,a/6t9Lt' );
define( 'LOGGED_IN_SALT',   'XiBb2S8igm)KU9e}E=VqhSm_ylm>_YQv08OEpuM1Ma<@|FJ; bq2UUDdRos(]Y}z' );
define( 'NONCE_SALT',       'OHE3v^Uyu9w% LR{h|l*JRmEseR:-%%M^;a -hO9tiWX,^u|_xf7v_(L9yr!K`Br' );
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