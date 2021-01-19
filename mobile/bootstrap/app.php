<?php

/*
|--------------------------------------------------------------------------
| 运行环境
|--------------------------------------------------------------------------
*/

define('IN_ECTOUCH', true);

/*
|--------------------------------------------------------------------------
| 应用名称
|--------------------------------------------------------------------------
*/

define('APPNAME', 'ECTouch');

/*
|--------------------------------------------------------------------------
| 应用版本
|--------------------------------------------------------------------------
*/

define('VERSION', 'v2.7');

/*
|--------------------------------------------------------------------------
| 编码格式
|--------------------------------------------------------------------------
*/

define('CHARSET', 'utf-8');

/*
|--------------------------------------------------------------------------
| 项目根目录
|--------------------------------------------------------------------------
*/

define('ROOT_PATH', str_replace('\\', '/', dirname(__DIR__)) . '/');

/*
|--------------------------------------------------------------------------
| Hash
|--------------------------------------------------------------------------
*/

define('PATH_HASH', substr(md5(ROOT_PATH), -6));

/*
|--------------------------------------------------------------------------
| 项目核心目录
|--------------------------------------------------------------------------
*/

define('BASE_PATH', ROOT_PATH . 'app/');

/*
|--------------------------------------------------------------------------
| 模块目录
|--------------------------------------------------------------------------
*/

define('APP_PATH', BASE_PATH . 'Modules/');

/*
|--------------------------------------------------------------------------
| 组件目录
|--------------------------------------------------------------------------
*/

define('COMPONENT_PATH', BASE_PATH . 'Component/');

/*
|--------------------------------------------------------------------------
| 二次开发目录
|--------------------------------------------------------------------------
*/

define('PLAYGROUND_PATH', BASE_PATH . 'Custom/');

/*
|--------------------------------------------------------------------------
| 插件目录
|--------------------------------------------------------------------------
*/

define('ADDONS_PATH', BASE_PATH . 'Plugins/');

/*
|--------------------------------------------------------------------------
| 项目配置目录
|--------------------------------------------------------------------------
*/

define('CONF_PATH', ROOT_PATH . 'config/');

/*
|--------------------------------------------------------------------------
| 语言包目录
|--------------------------------------------------------------------------
*/

define('LANG_PATH', ROOT_PATH . 'resources/lang/');

/*
|--------------------------------------------------------------------------
| 缓存目录
|--------------------------------------------------------------------------
*/

define('RUNTIME_PATH', ROOT_PATH . 'storage/framework/' . PATH_HASH . '/');

/*
|--------------------------------------------------------------------------
| 静态缓存目录
|--------------------------------------------------------------------------
*/

define('HTML_PATH', RUNTIME_PATH . 'views/');

/*
|--------------------------------------------------------------------------
| 日志目录
|--------------------------------------------------------------------------
*/

define('LOG_PATH', ROOT_PATH . 'storage/logs/' . PATH_HASH . '/');

/*
|--------------------------------------------------------------------------
| 模板文件目录
|--------------------------------------------------------------------------
*/

define('TMPL_PATH', ROOT_PATH . 'resources/views/');

/*
|--------------------------------------------------------------------------
| 入口脚本文件
|--------------------------------------------------------------------------
*/

define('PHP_SELF', isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME']);

/*
|--------------------------------------------------------------------------
| 目录安全文件
|--------------------------------------------------------------------------
*/

define('BUILD_DIR_SECURE', false);

/*
|--------------------------------------------------------------------------
| 加载全局常量
|--------------------------------------------------------------------------
*/

require BASE_PATH . 'Support/constant.php';

/*
|--------------------------------------------------------------------------
| 加载全局框架
|--------------------------------------------------------------------------
*/

require __DIR__ . '/../vendor/Kernel.php';

/*
|--------------------------------------------------------------------------
| 加载Helper
|--------------------------------------------------------------------------
*/

require __DIR__ . '/../app/Support/helpers.php';

/*
|--------------------------------------------------------------------------
| 加载 Eloquent
|--------------------------------------------------------------------------
*/

use Illuminate\Database\Capsule\Manager as Capsule;

$dbconf = require CONF_PATH . 'dbconf.php';

$capsule = new Capsule;

$capsule->addConnection(array(
    'driver' => $dbconf['db_type'],
    'host' => $dbconf['db_host'],
    'port' => $dbconf['db_port'],
    'database' => $dbconf['db_name'],
    'username' => $dbconf['db_user'],
    'password' => $dbconf['db_pwd'],
    'charset' => $dbconf['db_charset'],
    'collation' => 'utf8_general_ci',
    'prefix' => $dbconf['db_prefix'],
    'strict' => false,
));

try {
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
} catch (Exception $e) {
    exit($e->getMessage());
}
