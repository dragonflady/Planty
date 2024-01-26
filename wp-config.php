<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'AlKvg? ?m$?QG2|$Cp<[zqfCFr~)_11<t 8cgq~Ar#jhiSe^e)j !V*2&uN<kl4b' );
define( 'SECURE_AUTH_KEY',  'x_< /dp_2PKnXlsd6ock)d ASp2]2XY1A +g*n+ 5zf%2OC4#C27HUY ?k12hX$X' );
define( 'LOGGED_IN_KEY',    'i}VfyqAG_92Mqb/$lhXzPWzRE!y{EzQIgx)ond:$]AeAyecw,k; 0bqFPdTQYMWh' );
define( 'NONCE_KEY',        'FwBe4ku(sa]6sbbn}.:*=n7*`3-e44z6!lve2[LCJ47W$K,Jgkqq?iB7(4S/Cln.' );
define( 'AUTH_SALT',        '_!,Df{&?XM4(lmj. +Ja_J96Sn2cAS2E*6<WODW?9;o|62Wx/U:O=M ?a/niwY^C' );
define( 'SECURE_AUTH_SALT', '~t5&:aMRKNPKafR*XuiSD$xMT,c@_i5g[M&Xg_5xd{q?ZOZ dfjXR{DF:FC%(&#E' );
define( 'LOGGED_IN_SALT',   '6(j:MmMSO!T}FcM0H^b013Eo1^U0_VxW64`Fl9TAad!g8t={P~/;cdjK]pYqhFxS' );
define( 'NONCE_SALT',       'gr3xUj<@aGzo|}7gt .6`k`RC4l?aAI)z9`GTh&&qjM|7-*g!AQ-GzZ_h[(ZSURQ' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
