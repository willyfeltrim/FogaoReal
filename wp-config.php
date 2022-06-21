<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'fogao_real_database' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J/n4~INyyQp[MfVe}(tv?T+8T5nTR@0}[{W)Ac(sJslbIRq[Zpo(?/z*RsWRcHp=' );
define( 'SECURE_AUTH_KEY',  '|Yz^c7$5,FDQgA-/.73LVP+CY)0cIGDS>v0up4yDhY?INXTN6b,yYn 2GXupEy}3' );
define( 'LOGGED_IN_KEY',    '&qF2bs%.Fd=[`7DAg p0#q,<n_qOZE Q<z3MJpF[F2bw[cBA8J}aB5pv Xyc]k|,' );
define( 'NONCE_KEY',        'O+bmo1}H?ke,t%911ydl4h(^fU?2~qb4>.tQLIhI)ls1xpGaqWQA!%an[(kNA(e^' );
define( 'AUTH_SALT',        '40/jm]cjcM$@PvKfX5:OZM=K^r*%FNH&jE?=&=gGMCb$R?m}?My}D2|4BbhNT5Ct' );
define( 'SECURE_AUTH_SALT', 'Xwu _SptSYA%BX3b~^:h3[HKU{ ,Z;~U;#[x#W~<?$b~;2fCkWjt,)*_.m~R{U5.' );
define( 'LOGGED_IN_SALT',   'Mm<03ys*&?_VM=s#+E&*Sv=*oVVBjRfP*,N5Q#yqxC7i!OIN+hN97RH Co(zJ|*7' );
define( 'NONCE_SALT',       'K[&b0%XcTnzb{x4p8Wd3!l`$[.9JXTQn !F8Y|%g^oir1u<%RNd:dq86B#Ca(E=W' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
