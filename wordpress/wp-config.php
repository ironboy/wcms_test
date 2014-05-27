<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'wordpress');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'mysql');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j[Y$wczNe_}4S}jt.s##sJqO^yLO@x6iOU`i?M^B|jXH^{wi2U|7LU?2[;2Oq1iZ');
define('SECURE_AUTH_KEY',  'j@4,pf.O&{nWRT}&J}!`EY5*#FpoKL+:Zu>Ofo+[gfl)2TeVh4NpRs:umxnm9Iaa');
define('LOGGED_IN_KEY',    '.WbCK~w&!`_3:[<p.b:^U[p&%vs{G-o1|3Wl]`-P8fkS5kX-Ftw&%dg*U$IGy)-h');
define('NONCE_KEY',        'qx(`,{?24Eeg2Omc7mc(OO}(%hoPAuZ+&-[poJ.+7c0o[?<*d/L0LXxUo8O&K;|}');
define('AUTH_SALT',        'M6N#+`Ys=BMiKUx@B<Hl6FwE80ir+3p; &h(X|cZE $PX!y8It5G#Ch8O*:(,M%g');
define('SECURE_AUTH_SALT', '[n%?M&+ATR4b^cN,8oX$Xe?43.6s*WLs`v-.=|usSYcmxC:|*|.e}|h0-_Z{C]RE');
define('LOGGED_IN_SALT',   'Dx%?Q[vr2>0nU4[ev7LDeBE5Pd+kZtlwnWfT9I9O~q#2-FDw|NO x2jzW3?r5U=g');
define('NONCE_SALT',       '+/ZR}gnlL|Q_/8PF?7iPT^*5}-{yGV?o}b-z+_!|clI- +&:b.H-&n~/HJ~6(M+K');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-språk, förinställt för svenska.
 *
 * Du kan ändra detta för att ändra språk för WordPress.  En motsvarande .mo-fil
 * för det valda språket måste finnas i wp-content/languages. Exempel, lägg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' för att få sidan
 * på svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');