<?php
/**
* Il file base di configurazione di WordPress.
*
* Questo file definisce le seguenti configurazioni: impostazioni MySQL,
* Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
* E' possibile trovare ultetriori informazioni visitando la pagina: del
* Codex {@link http://codex.wordpress.org/Editing_wp-config.php
* Editing wp-config.php}. E' possibile ottenere le impostazioni per 
* MySQL dal proprio fornitore di hosting.
*
* Questo file viene utilizzato, durante l'installazione, dallo script
* di creazione di wp-config.php. Non è necessario utilizzarlo solo via
* web,è anche possibile copiare questo file in "wp-config.php" e
* rimepire i valori corretti.
*
* @package WordPress
*/

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
    define( 'WP_LOCAL_DEV', true );
    include( dirname( __FILE__ ) . '/wp-config-local.php' );
} else {

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', '');
/** Nome utente del database MySQL */
define('DB_USER', '');
/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');
/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');
/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

}


define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/assets' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/assets' );

define( 'WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress/');
define( 'WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);


/**#@+
* Chivi Univoche di Autenticazione e di Salatura.
*
* Modificarle con frasi univoche differenti!
* E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
* E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
*
* @since 2.6.0
*/

define('AUTH_KEY',         '%%ke|G4W:r6qymc}t`#KV*[~(7Y)SAq3=H---4)JK>&8/0Tj4?Q}|70qZ+*x=`T^');
define('SECURE_AUTH_KEY',  '+n2ro>LS8A(<DzhvB394>fPd5wfbC|-64.i;&/Tg2c~2_CUmV#l9|AbM#BbrVC s');
define('LOGGED_IN_KEY',    'LfMxv?~*3{-;~Evo~>-T>xZ%Gm$p.`+R)EncAVOOqJu`VwbDSEZwFX?lFD:~S2N>');
define('NONCE_KEY',        '|[YH:.>[iQ-XbwEg&U!XO/8n71Gb8O(p@,d+{ L C?$JJ}_]F*#ine6ZlUxrSkys');
define('AUTH_SALT',        '@PIun*|M,c`R6OOMO[3f=1{;|-#cfi+p~No00y@GUfEX7i]#6l!g(g#*%wBHn)`.');
define('SECURE_AUTH_SALT', 'Dz0chbR ]+H=C%{(qM>#a}1~vRd<![[aym^&ePYcY#K3 rq+R1FBu-l#ee6DpDn|');
define('LOGGED_IN_SALT',   'AV>r(rnKZ-78wtLR.;r|8~k(E/8gx#XltBi-o4(a#Gr,g5<o FMbK}i8UTssl_gf');
define('NONCE_SALT',       'Mb|>aq_k~%OCysyUQ[RPqB+@<^Zj0|Zt(I1,`KdY9u%X0@;puJ*JCA0%OqLtZDG3');



/**#@-*/
/**
* Prefisso Tabella del Database WordPress .
*
* E' possibile avere installazioni multiple su di un unico database if you give each a unique
* fornendo a ciascuna installazione un prefisso univoco.
* Solo numeri, lettere e sottolineatura!
*/
$table_prefix  = 'ndg_';
/**
* Lingua di Localizzazione di WordPress, di base Inglese.
*
* Modificare questa voce per localizzare WordPress. Occorre che nella cartella
* wp-content/languages sia installato un file MO corrispondente alla lingua
* selezionata. Ad esempio, installare de_DE.mo in to wp-content/languages ed
* impostare WPLANG a 'de_DE' per abilitare il supporto alla lingua tedesca.
* 
* Tale valore è già impostato per la lingua italiana
*/
define('WPLANG', 'it_IT');
/**
* Per gli sviluppatori: modalità di debug di WordPress.
*
* Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
* durante lo sviluppo.
* E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
* WP_DEBUG all'interno dei loro ambienti di sviluppo.
*/
if ( !defined('WP_DEBUG') )
    define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */
/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
