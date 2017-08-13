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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress_curso1');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '^eQ6~B{>!.JHOCvRh8TO@~+hnHuHB1?[ nI#7m>tiV:_Dh>*!KPxNFe l88sIMsi');
define('SECURE_AUTH_KEY',  'GnYz{B]iJbhCn5rqq+eu=V9$j{^_5I/Q^8GciIr)a4%t{GBx7*v9CNV#H7L -%t7');
define('LOGGED_IN_KEY',    ']c=aTZ0T)LUOX%!6D@%6iL%ppMhz)j)r15O$KuW/ud9w~JLJ|+*%jV1bwo&R[}Lg');
define('NONCE_KEY',        '7KQLNq08Tg2TMmcX3HP88^7liR=BUXHIUQo`DaI7#YRkpjI3L`P`y~aJN|YbZSbV');
define('AUTH_SALT',        '_EXTkf* +C6Kh32>zN}.2bnX&8 !|^Zy[l/Q$uVA7h+@?bp*qo)CS@3kW4v>1u E');
define('SECURE_AUTH_SALT', 'f7=H#YAXF+bv2Lp7XQ]?F8[gg*,a/l+;B3ZJ)bg|,J2Jigm]=iBojgpI55,k-NlX');
define('LOGGED_IN_SALT',   '9yzyr%!jtO`=nd}dEE5[CZfP$n6rJHph*3[e1zk.T-*@azQv[-VI(wu(Fo}+IH?u');
define('NONCE_SALT',       '@]^tMp%v2mg1,&,9nWsc$+9vWT|& msL$K^e[NK#vn}H9!1Lk`g6zLyPUwAsFN4:');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
