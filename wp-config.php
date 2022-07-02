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
define( 'DB_NAME', 'bd-perfil' );

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
define( 'AUTH_KEY',         '&|uTrkD(bCY5:vQW:rOiy*Ki.K0D7>C9m(t%QlGgxW+&Nn*lVIbsm8:F,p[s=nwG' );
define( 'SECURE_AUTH_KEY',  'hIc3L#^_:7&lD9KkTQ)C_8,dXHhHZYmc0HAixi1OmplfUa(X7KY-T,%3q$rk(p~3' );
define( 'LOGGED_IN_KEY',    '$QC=oj^lZah_9%%ltGF&*CNeWTairDea%)Qj//i6fl-t/7qxgW6taSYrLVSVrHO%' );
define( 'NONCE_KEY',        ':YJaQ TMw7?}@o;%B%P2xS$E>05eas^igCe2pCj9|$F5mU^P1j4H=&uHF6FZ1 $)' );
define( 'AUTH_SALT',        'X~XRRH#gTeF.<6B:`K?kY3ULIh]v>)Li%@_9;^xV;bg7{GLrA8ZbZ{9|JKW9M,#s' );
define( 'SECURE_AUTH_SALT', 'K;w8BQ`brc.h-F l?rY2jHgX=5XWf}#:?q.DwBa#}X[iZ/ne%+fG!;`%0u,Mc:AA' );
define( 'LOGGED_IN_SALT',   '3#9u[%@fkJ*4SD*2mVSMw>a]?ldm2L$$;wG5<R21V4#,nF:/W4_5$&f)c9l::aPr' );
define( 'NONCE_SALT',       'pe7S?nxNoR3n,-38D}Xa${KgiK5|Nm<S^GY-ZrC*4`&mjs|#BcSLoS<Rp?t44Q3.' );

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
