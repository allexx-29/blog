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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'NSFN^o_I/YN4{2Z:lNG2Rpr68TnVjMCjo4*|<y?Z06ZAL%A:pV#&r,8P~BYZb_K9' );
define( 'SECURE_AUTH_KEY',  '7TlOf#@op+Je*=2BG]<%?N4>HzIN:XM<rgD{{:aAgbWmtGwa)z>WvGZXP{dy3m%e' );
define( 'LOGGED_IN_KEY',    's_H:&@{[kz%]+!]O)g r,tb1stzHdU7|vW7+>a-73B+{I?)COHdU<_>Rn:D0LUUM' );
define( 'NONCE_KEY',        '$~Tm],9p2WA ]A%Y0`&tE-Z3FXQm}Kp[WSe=SDnq[|FymD=,}H3j(k(,5|n#U4z)' );
define( 'AUTH_SALT',        'K ?|8yy~0U{68CfDD$I}`(/hlyE]3R}DP:KYj&B][WMm.4~J|@cM+(spXxw!Dbs^' );
define( 'SECURE_AUTH_SALT', 'd]-QaJ.{;p# _g:1MU1oP?40YJf<0/8Mt!aF*t#S$VAd(aL@m)-Rv975uWvk^Mh4' );
define( 'LOGGED_IN_SALT',   '7D}AvAW5CS-voTm~n]@z(4$MovDk}:=~(P[hIzV+O=(O,Fzv;qEmkSZ O$vlzbxo' );
define( 'NONCE_SALT',       'xzfhB^L/bR}a%O%@nczEu}Ar&Y6?cL2O)$K{TQ9HR$!|yY_dI2:q!!iLNMZh[7B|' );

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
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
