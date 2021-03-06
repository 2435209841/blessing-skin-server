<?php
/* MySQL 数据库名 */
define('DB_NAME', 'skin');

/* MySQL 数据库用户名 */
define('DB_USER', 'root');

/* MySQL 连接密码 */
define('DB_PASSWD', 'root');

/* MySQL 端口，默认 3306 */
define('DB_PORT', 3306);

/* MySQL 主机 */
define('DB_HOST', 'localhost');

/**
 * 数据表前缀
 *
 * 如果您有在同一数据库内安装多个 Blessing Skin Server 的需求，
 * 请为每个皮肤站设置不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
define('DB_PREFIX', 'bs_');

/* 盐，用于 token 加密，修改为任意随机字符串 */
define('SALT', '9tvsE+1._%R4@VLaX(I|.U+h_d*s');

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/* Blessing Skin Server 项目根目录 */
define('BASE_DIR', dirname(__FILE__));
