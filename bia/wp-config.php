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
define( 'DB_NAME', 'bia' );

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
define( 'AUTH_KEY',         'e_F|b7ig3a$_?sffc-7<py`I 2P&W*OV<?[{i~Zf;{5=~-o-{HuM/bw3f*g#RWT1' );
define( 'SECURE_AUTH_KEY',  'oIWMPg<JHTxS|>`G41z,d6,,-Z8(B8C7Bf<xnt)^].34qa)~]2;_H)OhRlQ5n9He' );
define( 'LOGGED_IN_KEY',    '}ve,p7dcI<^LF){D?h=ZqjOO>.zFUcdUf,;&}tO`>9yv{@nTgK*Rn^5h?O!v Q2$' );
define( 'NONCE_KEY',        '<@1OL>vO5*+/rR=s/>$Q!O& Z@h-+y}Aay}_GHFqG14|.czn)Hz>0q VROn9aKp>' );
define( 'AUTH_SALT',        ')?c)-AxJoXqD]*xo6UlljF(jvuaX|`hG?ldo%%Fz~lATK${;.%&[ZGW39~T!qe6(' );
define( 'SECURE_AUTH_SALT', 'Ie&|bPI44$-M?<FkKY+&7LyUpv@b;TZG>%N<1#udV{G`95wZaz&;&r]X_1!G/`>P' );
define( 'LOGGED_IN_SALT',   'UKzn*>Ga<V*S0`jYQ`5w$G>m,I,OxpN$B (ruG*3Ovr1~Y>F|V4lMs{wK<!`z{*1' );
define( 'NONCE_SALT',       't<*-!U@&r0}(<~_+xSb:/7==T=Nh0<rxy,Gw^&yL:CkUG8pou&&OGlW#@MM.rCzY' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpbia_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
