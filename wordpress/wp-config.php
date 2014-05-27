<?php
/**
 * Baskonfiguration f�r WordPress.
 *
 * Denna fil inneh�ller f�ljande konfigurationer: Inst�llningar f�r MySQL,
 * Tabellprefix, S�kerhetsnycklar, WordPress-spr�k, och ABSPATH.
 * Mer information p� {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter f�r du fr�n ditt webbhotell.
 *
 * Denna fil anv�nds av wp-config.php-genereringsskript under installationen.
 * Du beh�ver inte anv�nda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i v�rdena.
 *
 * @package WordPress
 */

// ** MySQL-inst�llningar - MySQL-uppgifter f�r du fr�n ditt webbhotell ** //
/** Namnet p� databasen du vill anv�nda f�r WordPress */
define('DB_NAME', 'wordpress');

/** MySQL-databasens anv�ndarnamn */
define('DB_USER', 'root');

/** MySQL-databasens l�senord */
define('DB_PASSWORD', 'mysql');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning f�r tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp f�r databasen. �ndra inte om du �r os�ker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * �ndra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan n�r som helst �ndra dessa nycklar f�r att g�ra aktiva cookies obrukbara, vilket tvingar alla anv�ndare att logga in p� nytt.
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
 * Tabellprefix f�r WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokst�ver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-spr�k, f�rinst�llt f�r svenska.
 *
 * Du kan �ndra detta f�r att �ndra spr�k f�r WordPress.  En motsvarande .mo-fil
 * f�r det valda spr�ket m�ste finnas i wp-content/languages. Exempel, l�gg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' f�r att f� sidan
 * p� svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * F�r utvecklare: WordPress fels�kningsl�ge. 
 * 
 * �ndra detta till true f�r att aktivera meddelanden under utveckling. 
 * Det �r rekommderat att man som till�ggsskapare och temaskapare anv�nder WP_DEBUG 
 * i sin utvecklingsmilj�. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera h�r! Blogga p�. */

/** Absoluta s�kv�g till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-v�rden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');