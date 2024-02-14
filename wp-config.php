<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_webdulich' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kF_[)O|g6&5[~2BG?4D>Vf<yVh*<^F3i2-~oDT2`V,jtql!:.{mv3M]Iv@Iz{USy' );
define( 'SECURE_AUTH_KEY',  '#OYx1Wjh8oAx2H^T5jNOF(~yfbo9tph362gU^W$W1~wcm,hE=f@:H;D_u7ixp~Hx' );
define( 'LOGGED_IN_KEY',    'Rlc<G/#Aj7nLSzmM}-#)W&zs!.OT%[ab|@A%4Db0V5c[0^mZswT.F]-@>4]l9PUK' );
define( 'NONCE_KEY',        '[xq#9!_g{Bi44it&:uAIB5z^i@Ov6RAzoCOEg(f_y*Ya.KsAzJgYuKYiJCZhG58r' );
define( 'AUTH_SALT',        'IcS7o>-2,Q);m/3Dc-82Y;`;_csh V=$$R8xMbRbHB#)HJ]oK?}e`*<=B>iK|vkw' );
define( 'SECURE_AUTH_SALT', ':1*dJkJh:c-r7f1=X3|!<[_!0155%s#-E/RJB=4*ZHNGwB}w1kwBTJ1TsSq3#Zpg' );
define( 'LOGGED_IN_SALT',   '#h<9M*^T=bW@/qrKCZT(6p:%RKkQhr2G1|Ep=20wunVw8&v=R+gDUu~,M/l_+zRL' );
define( 'NONCE_SALT',       '7*<S&;=m%wX,m0[gE@nU6YP#>6a9OakeuRRQFgDP?G~z&7!lxp)2;10SYq^-n`Fv' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
