<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'realize' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@ri<YbdC97+EY*2fB:IeM#m(`?bW;Xq#pSs`8HzV$LXrbzb`9mbDRKHGg^WNg+W2' );
define( 'SECURE_AUTH_KEY',  '$9TyO;{X)|D2-p$ga6GDnjhWV]7:6Glr*gJs=HzUxHx&0(|Sd|0x$EFMUENYe]1h' );
define( 'LOGGED_IN_KEY',    'J2v_KPR9utyk59zb0P:+fX{xmQ2xczZZXRfpH(0>_E]B~NP%<V?:x2GubgHvgk7v' );
define( 'NONCE_KEY',        '|_Mt4Tk7!zLt~u!?`U)7@ZR8_vR~QU[fvS|5IWP0tRTh^C><XuC`_!O<n5iPCozQ' );
define( 'AUTH_SALT',        'kSa[u3ukn]m*zWPDH;~4/.`f3$r{}T9xjQ(,W+:necx<w[!055b~.+X*7p`]Pko.' );
define( 'SECURE_AUTH_SALT', 'AQ[GRRT[p<d 7&EEdF6dnxyEoEj[Ns,ChLVs$~cb5-nbM0.hW),,EZ[Bsx&gQ.~8' );
define( 'LOGGED_IN_SALT',   '4a&l>aE~>n]%.8z0,o(yUL.!s9RQ6iC!xrdpLzL9[27w7$nz]M0>Fn{ops4O)7:)' );
define( 'NONCE_SALT',       '@[7<q}U4jUbK[SF@qCyK3M=#]TaIq?{<@QOxxBT}/x6?)ZL})?v%y^Ry,}Cg:ce>' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
