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
define('DB_NAME', 'bhx20243_lab');

/** Имя пользователя MySQL */
define('DB_USER', 'bhx20243_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'xIxlotus2');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '>$FMCE%g=[1*0p|XR? llt4$Lhx!t4DLb{1bWIm :rs~^)XT=w[C[rE.j|kZLzM^');
define('SECURE_AUTH_KEY',  '7`)[$_g7ZC kbQ5Dy>|xOY7S]/o(k=HYvwvYyxR%zRf*r-T96f;-jF2{?(h!<o:Z');
define('LOGGED_IN_KEY',    'ZM>anwH`D13(_w[tk~5|!{j?d2z0iR9in`f&?%Dw#RBs8(1kf5C65.&o=j*D1`(n');
define('NONCE_KEY',        'BEi{y#P=rH}w&MhG-G~^!q}YN{>p5_Ft6l0nlu@zF0^!gK_k70EP]`;NX4w1]Vva');
define('AUTH_SALT',        'e*B-$U5|1oA.<:syl728+S*q8w+IoN|]$oHtT9F;&2F_,ThGCq`OtxJ_.[U.>AD ');
define('SECURE_AUTH_SALT', '~K4hu1`F`7#pjQ&C9L~Xb>#M-l4L C5p@d7ml<yk%L@y~iB6}ZlAJPi7lVZZOElg');
define('LOGGED_IN_SALT',   'Ra6Gq2rt2D>/`{D5mhc@(^/z&mF./y7|$[#,+}P]RDo ^}Tzw4m=0(5K*TWt}oYM');
define('NONCE_SALT',       '|vB:M/Yi`P<9$:Gt6#*&-Wi`. 3?y;]s7wa=<4UWJta)!vsq=(i>CTId(Pb=1+wm');

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
