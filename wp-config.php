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
define( 'DB_NAME', 'eval_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '0000' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S^{F?rG~`/N@Ll#5,wu[aaR(6*h6XiE2?SzQ)7jSd!0[+lNxyBk;:F8.EVe>h~XL' );
define( 'SECURE_AUTH_KEY',  'Qk08lX%mnRC,=+D)x=UC0/3h$@M*6b%Oe7=@G%X7jlj&WYg}[kn|-prRruuN7P*B' );
define( 'LOGGED_IN_KEY',    'r|rE|VZ0lXo<nFEpc*p=A]rv%cpQ]2ohl>Z[,O;ak;Ra8,)a>oMqc~$$cy6uR.@^' );
define( 'NONCE_KEY',        '!D.nW?lyYxt<Z2^3 }wP^)EvSb*~<PHi?(*,Z<91=gFk[ccR5Qh;E9&:t1ia?_)j' );
define( 'AUTH_SALT',        '#Gi>|H%HOE &>|0`@;~^mx2<G{v_efZPah]LZ|YX0^uA9[:m0p*;]tr&f[pj=1J5' );
define( 'SECURE_AUTH_SALT', 'X@^|)*kd-!Mc3)TE=;y`k5i0CtL4!0yGzJV<Ei;hP &~~,%R+K@/{df[g.&v{~-5' );
define( 'LOGGED_IN_SALT',   'x6X%Oc_` ,<c(OhADf=It~UWf^lzreeUtDCzcRs)M[<{9d0_+owUnO<#:B>(n75c' );
define( 'NONCE_SALT',       'zA}?XXKa@5}e=FBj eSIcD/lXA;]6Y?6h&n%;Oq: ~vky{o%zufeX^BBRnXl =Bd' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
