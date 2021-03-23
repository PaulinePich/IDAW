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
define( 'DB_NAME', 'pauline_pichon' );

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
define( 'AUTH_KEY',         'M#E53T3Uw!sZ_=?76ow BqV =,^ZT6X5ni QV^v,X,zcopJ.:]EH~io^2l^hD%h^' );
define( 'SECURE_AUTH_KEY',  'A-R^gjmoQSSqL}j,@?+@ WW%t]PB,t%8S]/FWRi3=uMn:456y6E^PjVDlyPrte;x' );
define( 'LOGGED_IN_KEY',    '7N?vaj@NJSCVFV FOr,<K+]MyYNlkfpe~Z=5(&DB}aqF^d {bEuS@@mDv.5e=T%Q' );
define( 'NONCE_KEY',        '.b<gEW{A$/2F]y8)1v7rDKo=mscgE.3C3*Dk&{BE@-0g_H;4~DbQOSXS|R$7o}qp' );
define( 'AUTH_SALT',        '5^7zu|Y4N_B7PRSS{anOQA]@4!tvfCfq3^wuKo!Zr5X,9laX2xIsJzpJ)cL8ujk5' );
define( 'SECURE_AUTH_SALT', 'pp~(+x(RSc-yR4VeA8Nel)A5]}c)14_Nb_YP*pq/.v*yCH-{T7tZRM<(3.Ws1mj}' );
define( 'LOGGED_IN_SALT',   'Z1>kHL{L.;bMZ-,^bxPijh M70O)M-IK~U[aG3/}O8lkUM7<~Wp4Ch/U9/d`%WwW' );
define( 'NONCE_SALT',       '%tqA^[F$Z.a=y91Ll$e}I8GQQE,6UmFoAsxD8.c#NWvYB{ba,[sEfi;FlM4vIzPo' );
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
