<?php
require_once dirname(__FILE__) . '/jae_config.php';
// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */

define('DB_NAME', 'wordpress_zh');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '123456');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>V9DH?OG}AM4zncmFTHp<SE0ObINo~hnc!]kgfDIaykU-~~h*P9|l+^:ut{|nJ.#');
define('SECURE_AUTH_KEY',  'B_S}2Mgf#&_R0s!`mJ;,O=(k|(XW)}QqE+r:_A6roybWY(+^|t~-7>Di8MMbXn-)');
define('LOGGED_IN_KEY',    'v~-2WwbgxNrt1A!k!]PS;c7ndp_nK/A|&3-E&+wqTs?EB-~3rd5FZyP5Z^]Xn(ni');
define('NONCE_KEY',        'fr!8>HdXe/A&[aW=C.-QMxAPgK4DOT-MAkH*Kq,u9-aIZi S^J.Qe9Ztx-e}/XjB');
define('AUTH_SALT',        'PTLMM@H=e#a:MDkj%|ybVA~HZt93o^0/0.vQLpvdkyiln]KbiLqx}9sdZ=ne2!x=');
define('SECURE_AUTH_SALT', '8l$T+9zPM}bUu#~$Y+~%W0]D:u]y6t1?l^9MJ-0?&-W;z6#s3}H4maO^~5r0t+BO');
define('LOGGED_IN_SALT',   '-:%7/EDh+|.[uD9@Y_cY?BsN9T%mPQ _0?.+H0YRhO#Poq1aj-vP#glq7@nkY+2s');
define('NONCE_SALT',       '>_]iHI9A_dPF*)@1O9;ZzC;KWw|~>2T/_@$#;}W?+CiMWGfd:GSKr5ahfChh6r|w');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * WordPress语言设置，中文版本默认为中文。
 *
 * 本项设定能够让WordPress显示您需要的语言。
 * wp-content/languages内应放置同名的.mo语言文件。
 * 例如，要使用WordPress简体中文界面，请在wp-content/languages
 * 放入zh_CN.mo，并将WPLANG设为'zh_CN'。
 */
define('WPLANG', 'zh_CN');

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

?>