<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u435590527_port');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8U(;R.v0r<em+UL]+?Dx#R|,O>Jx)LjW.E`g=E-b ]JYtC@U6ky=Q]_fvw]f4WfN');
define('SECURE_AUTH_KEY',  '3ig/iZZ$zB]DD39]4wU=9&jo}J)7*_.rAUybPaw!4/-NmtiqK!!2Ng%[AcPU~$kV');
define('LOGGED_IN_KEY',    '!IbomJkwPp7^-}-N&PjnpbFEupb0#PDcy+p#MpBt,Jv{Uwq1I}@P|m7=wkRxZ`2:');
define('NONCE_KEY',        'NHH7_m1bA-hgvp~7AKq/@F0MjX8B-:3-m2YOh6(I&OAm~w .m8*j}uK=GG=n;69[');
define('AUTH_SALT',        '|[Pu_ILnT)vzZm8*gR<y/VA:3UyrV^0GU3LNr0H5H^*6:4:{$0JYET~-6jtt#QaV');
define('SECURE_AUTH_SALT', ',p3mxxdhZ30@SmEIo$&m_P*eK`yz<3<({laP5~MW$FBgKpLMys$#uDpH,q]y+vvW');
define('LOGGED_IN_SALT',   'vj;h`nh+izJ`jW}<RmuIG%4ue)Gv0W7/mEnz1FS[`(Uz4&XKT*DQd!UMN7|ou73B');
define('NONCE_SALT',       'MPo{v[;{+U$TlCjpX#./ztT}J;VM66z8@pc(nH&C.#opM>1k4BJXJ-PK;D8EL(<u');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
