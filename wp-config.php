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
define( 'DB_NAME', 'wp_site_nu' );

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
define( 'AUTH_KEY',         'zQ*WXN[?zqYKTP{j$>`EFvO7a&fl{I=-oPLTrM+1[+Nm2v/)F 5mnYcZ0h5FKS=x' );
define( 'SECURE_AUTH_KEY',  'Tk9/dXYWnoskre]CY}=B3k[W558X6o?;V=TZ?5qCqapN;n+ujJw{kZ+ySn[3Eur;' );
define( 'LOGGED_IN_KEY',    '[p>*w[LDvw<!nMPDh$2Q`5 rE}^;rT(JyCyV.4L%/RK=hFrsU^FKNFunjgjYUH>o' );
define( 'NONCE_KEY',        'Xjwe+w@9w!X+)*(~S}gAH+j-]TU?y2hj5]=67@K*}YZwkq<(c~o {x0Nt^%T%.G#' );
define( 'AUTH_SALT',        'KGyUbEKqo_os!mt,AP[$AKL`X[j5/ayA>kg=^1kjLfP-@?9|Ss!^C=:G&Ouu[G&Y' );
define( 'SECURE_AUTH_SALT', 'cBewJn@!7wr6A%1% 2rO|1vz|D_n*XE&C+ ^0cOVZ!-`O5`:M-?fo=S>9wT2o%a?' );
define( 'LOGGED_IN_SALT',   'KUpZP6|(hE1dH[rqd]X>Q_Gy#-C#ht1JF@%z)e,BJBjit/}A@N2y_*4,aq$srOxi' );
define( 'NONCE_SALT',       'ZQOzJ8N f{=].Fe+1FDk)f/$6Et?gLYKH&?/~d]b/?F66S=i>Z.ZQFFJS=7lpN&n' );
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
