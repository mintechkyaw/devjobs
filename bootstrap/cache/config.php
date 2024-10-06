<?php return array (
  2 => 'broadcasting',
  4 => 'concurrency',
  5 => 'cors',
  8 => 'hashing',
  14 => 'view',
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://devjobs.test',
    'frontend_url' => 'http://localhost:3000',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'cipher' => 'AES-256-CBC',
    'key' => 'base64:ofPPLIQY1mwdhUoYrzOywFyRLwnGm6+H9H12UWGE+kI=',
    'previous_keys' => 
    array (
    ),
    'maintenance' => 
    array (
      'driver' => 'file',
      'store' => 'database',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Concurrency\\ConcurrencyServiceProvider',
      6 => 'Illuminate\\Cookie\\CookieServiceProvider',
      7 => 'Illuminate\\Database\\DatabaseServiceProvider',
      8 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      9 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      10 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      11 => 'Illuminate\\Hashing\\HashServiceProvider',
      12 => 'Illuminate\\Mail\\MailServiceProvider',
      13 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      14 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      15 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      16 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      17 => 'Illuminate\\Queue\\QueueServiceProvider',
      18 => 'Illuminate\\Redis\\RedisServiceProvider',
      19 => 'Illuminate\\Session\\SessionServiceProvider',
      20 => 'Illuminate\\Translation\\TranslationServiceProvider',
      21 => 'Illuminate\\Validation\\ValidationServiceProvider',
      22 => 'Illuminate\\View\\ViewServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\VoltServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Concurrency' => 'Illuminate\\Support\\Facades\\Concurrency',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Context' => 'Illuminate\\Support\\Facades\\Context',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Number' => 'Illuminate\\Support\\Number',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Process' => 'Illuminate\\Support\\Facades\\Process',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schedule' => 'Illuminate\\Support\\Facades\\Schedule',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_reset_tokens',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'cache' => 
  array (
    'default' => 'database',
    'stores' => 
    array (
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'connection' => NULL,
        'table' => 'cache',
        'lock_connection' => NULL,
        'lock_table' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'D:\\laravelproject\\devjobs\\storage\\framework/cache/data',
        'lock_path' => 'D:\\laravelproject\\devjobs\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => '',
  ),
  'database' => 
  array (
    'default' => 'sqlite',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'D:\\laravelproject\\devjobs\\database\\database.sqlite',
        'prefix' => '',
        'foreign_key_constraints' => true,
        'busy_timeout' => NULL,
        'journal_mode' => NULL,
        'synchronous' => NULL,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'laravel',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'mariadb' => 
      array (
        'driver' => 'mariadb',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'laravel',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '5432',
        'database' => 'laravel',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '1433',
        'database' => 'laravel',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 
    array (
      'table' => 'migrations',
      'update_date_on_publish' => true,
    ),
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\laravelproject\\devjobs\\storage\\app/private',
        'serve' => true,
        'throw' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\laravelproject\\devjobs\\storage\\app/public',
        'url' => 'http://devjobs.test/storage',
        'visibility' => 'public',
        'throw' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ),
    ),
    'links' => 
    array (
      'D:\\laravelproject\\devjobs\\public\\storage' => 'D:\\laravelproject\\devjobs\\storage\\app/public',
    ),
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Livewire',
    'view_path' => 'D:\\laravelproject\\devjobs\\resources\\views/livewire',
    'layout' => 'components.layouts.app',
    'lazy_placeholder' => NULL,
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
      'cleanup' => true,
    ),
    'render_on_redirect' => false,
    'legacy_model_binding' => false,
    'inject_assets' => true,
    'navigate' => 
    array (
      'show_progress_bar' => true,
      'progress_bar_color' => '#7615c5',
    ),
    'inject_morph_markers' => true,
    'pagination_theme' => 'simple-tailwind',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => NULL,
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\laravelproject\\devjobs\\storage\\logs/laravel.log',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\laravelproject\\devjobs\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
        'replace_placeholders' => true,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ),
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
        'facility' => 8,
        'replace_placeholders' => true,
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'D:\\laravelproject\\devjobs\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'log',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '2525',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'local_domain' => 'devjobs.test',
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'resend' => 
      array (
        'transport' => 'resend',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
      'roundrobin' => 
      array (
        'transport' => 'roundrobin',
        'mailers' => 
        array (
          0 => 'ses',
          1 => 'postmark',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'D:\\laravelproject\\devjobs\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'connection' => NULL,
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'batching' => 
    array (
      'database' => 'sqlite',
      'table' => 'job_batches',
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'sqlite',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
    'resend' => 
    array (
      'key' => NULL,
    ),
    'slack' => 
    array (
      'notifications' => 
      array (
        'bot_user_oauth_token' => NULL,
        'channel' => NULL,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'database',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'D:\\laravelproject\\devjobs\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
    'partitioned' => false,
  ),
  'wireui' => 
  array (
    'prefix' => NULL,
    'style' => 
    array (
      'shadow' => 'base',
      'rounded' => 'md',
      'color' => 'primary',
    ),
    'alert' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'rounded' => 'global',
        'variant' => 'flat',
        'padding' => 'medium',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'rounders' => 'WireUi\\WireUi\\Rounded',
        'paddings' => 'WireUi\\Components\\Alert\\WireUi\\Padding',
        'variants' => 'WireUi\\Components\\Alert\\WireUi\\Variant',
      ),
    ),
    'avatar' => 
    array (
      'default' => 
      array (
        'size' => 'md',
        'border' => 'thin',
        'rounded' => 'full',
        'color' => 'secondary',
      ),
      'packs' => 
      array (
        'rounders' => 'WireUi\\WireUi\\Rounded',
        'sizes' => 'WireUi\\Components\\Avatar\\WireUi\\Size',
        'colors' => 'WireUi\\Components\\Avatar\\WireUi\\Color',
        'borders' => 'WireUi\\Components\\Avatar\\WireUi\\Border',
        'icon-sizes' => 'WireUi\\Components\\Avatar\\WireUi\\IconSize',
      ),
    ),
    'badge' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'rounded' => 'global',
        'size' => 'sm',
        'variant' => 'solid',
      ),
      'packs' => 
      array (
        'rounders' => 'WireUi\\WireUi\\Rounded',
        'variants' => 'WireUi\\Components\\Badge\\WireUi\\Variant',
        'icon-sizes' => 'WireUi\\Components\\Badge\\WireUi\\IconSize',
        'sizes' => 'WireUi\\Components\\Badge\\WireUi\\Size\\Base',
      ),
    ),
    'mini-badge' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'rounded' => 'global',
        'size' => 'sm',
        'variant' => 'solid',
      ),
      'packs' => 
      array (
        'rounders' => 'WireUi\\WireUi\\Rounded',
        'variants' => 'WireUi\\Components\\Badge\\WireUi\\Variant',
        'icon-sizes' => 'WireUi\\Components\\Badge\\WireUi\\IconSize',
        'sizes' => 'WireUi\\Components\\Badge\\WireUi\\Size\\Mini',
      ),
    ),
    'button' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'rounded' => 'global',
        'size' => 'md',
        'variant' => 'solid',
      ),
      'packs' => 
      array (
        'rounders' => 'WireUi\\WireUi\\Rounded',
        'variants' => 'WireUi\\Components\\Button\\WireUi\\Variant',
        'icon-sizes' => 'WireUi\\Components\\Button\\WireUi\\IconSize',
        'sizes' => 'WireUi\\Components\\Button\\WireUi\\Size\\Base',
      ),
    ),
    'mini-button' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'rounded' => 'global',
        'size' => 'md',
        'variant' => 'solid',
      ),
      'packs' => 
      array (
        'rounders' => 'WireUi\\WireUi\\Rounded',
        'variants' => 'WireUi\\Components\\Button\\WireUi\\Variant',
        'icon-sizes' => 'WireUi\\Components\\Button\\WireUi\\IconSize',
        'sizes' => 'WireUi\\Components\\Button\\WireUi\\Size\\Mini',
      ),
    ),
    'card' => 
    array (
      'default' => 
      array (
        'rounded' => 'global',
        'color' => 'base',
        'variant' => 'flat',
        'padding' => 'medium',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Card\\WireUi\\Color',
        'paddings' => 'WireUi\\Components\\Card\\WireUi\\Padding',
        'rounders' => 'WireUi\\Components\\Card\\WireUi\\Rounded',
      ),
    ),
    'checkbox' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'size' => 'sm',
        'rounded' => 'base',
      ),
      'packs' => 
      array (
        'rounders' => 'WireUi\\WireUi\\Rounded',
        'sizes' => 'WireUi\\Components\\Switcher\\WireUi\\Checkbox\\Size',
        'colors' => 'WireUi\\Components\\Switcher\\WireUi\\Checkbox\\Color',
      ),
    ),
    'color-picker' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'datetime-picker' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
        'interval' => 10,
        'timezone' => NULL,
        'right-icon' => 'calendar',
        'time-format' => 12,
        'parse-format' => NULL,
        'without-time' => false,
        'without-tips' => false,
        'user-timezone' => NULL,
        'display-format' => NULL,
        'without-timezone' => false,
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'dialog' => 
    array (
      'default' => 
      array (
        'z-index' => 'z-60',
        'blur' => 'none',
        'type' => 'base',
        'width' => '2xl',
        'align' => 'start',
      ),
      'packs' => 
      array (
        'blurs' => 'WireUi\\Components\\Modal\\WireUi\\Blur',
        'types' => 'WireUi\\Components\\Modal\\WireUi\\Type',
        'widths' => 'WireUi\\Components\\Modal\\WireUi\\Width',
        'aligns' => 'WireUi\\Components\\Modal\\WireUi\\Align',
      ),
    ),
    'dropdown' => 
    array (
      'default' => 
      array (
        'width' => 'lg',
        'height' => '3xl',
        'position' => 'bottom-start',
      ),
      'packs' => 
      array (
        'widths' => 'WireUi\\Components\\Dropdown\\WireUi\\Width',
        'heights' => 'WireUi\\Components\\Dropdown\\WireUi\\Height',
      ),
    ),
    'icon' => 
    array (
      'variant' => 'outline',
    ),
    'input' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'currency' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'maskable' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'number' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'password' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'phone' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'link' => 
    array (
      'default' => 
      array (
        'size' => 'md',
        'color' => 'primary',
        'underline' => 'hover',
      ),
      'packs' => 
      array (
        'sizes' => 'WireUi\\Components\\Link\\WireUi\\Size',
        'colors' => 'WireUi\\Components\\Link\\WireUi\\Color',
        'underlines' => 'WireUi\\Components\\Link\\WireUi\\Underline',
      ),
    ),
    'modal' => 
    array (
      'default' => 
      array (
        'z-index' => 'z-50',
        'blur' => 'none',
        'type' => 'base',
        'width' => '2xl',
        'align' => 'start',
      ),
      'packs' => 
      array (
        'blurs' => 'WireUi\\Components\\Modal\\WireUi\\Blur',
        'types' => 'WireUi\\Components\\Modal\\WireUi\\Type',
        'widths' => 'WireUi\\Components\\Modal\\WireUi\\Width',
        'aligns' => 'WireUi\\Components\\Modal\\WireUi\\Align',
      ),
    ),
    'modal-card' => 
    array (
      'default' => 
      array (
        'z-index' => 'z-50',
        'blur' => 'none',
        'type' => 'base',
        'width' => '2xl',
        'align' => 'start',
      ),
      'packs' => 
      array (
        'blurs' => 'WireUi\\Components\\Modal\\WireUi\\Blur',
        'types' => 'WireUi\\Components\\Modal\\WireUi\\Type',
        'widths' => 'WireUi\\Components\\Modal\\WireUi\\Width',
        'aligns' => 'WireUi\\Components\\Modal\\WireUi\\Align',
      ),
    ),
    'native-select' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'notifications' => 
    array (
      'default' => 
      array (
        'z-index' => 'z-70',
        'position' => 'top-end',
      ),
      'packs' => 
      array (
        'positions' => 'WireUi\\Components\\Notifications\\WireUi\\Position',
      ),
    ),
    'radio' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'size' => 'sm',
        'rounded' => 'full',
      ),
      'packs' => 
      array (
        'rounders' => 'WireUi\\WireUi\\Rounded',
        'sizes' => 'WireUi\\Components\\Switcher\\WireUi\\Radio\\Size',
        'colors' => 'WireUi\\Components\\Switcher\\WireUi\\Radio\\Color',
      ),
    ),
    'select' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'textarea' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'time-picker' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'shadow' => 'global',
        'rounded' => 'global',
        'right-icon' => 'clock',
        'military-time' => false,
        'without-seconds' => false,
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'colors' => 'WireUi\\Components\\Wrapper\\WireUi\\Color',
        'rounders' => 'WireUi\\Components\\Wrapper\\WireUi\\Rounded',
      ),
    ),
    'time-selector' => 
    array (
      'default' => 
      array (
        'borderless' => false,
        'shadowless' => false,
        'military-time' => false,
        'without-seconds' => false,
      ),
      'packs' => 
      array (
        'shadows' => 'WireUi\\WireUi\\Shadow',
        'rounders' => 'WireUi\\WireUi\\Rounded',
      ),
    ),
    'toggle' => 
    array (
      'default' => 
      array (
        'color' => 'global',
        'size' => 'sm',
        'rounded' => 'full',
      ),
      'packs' => 
      array (
        'rounders' => 'WireUi\\WireUi\\Rounded',
        'sizes' => 'WireUi\\Components\\Switcher\\WireUi\\Toggle\\Size',
        'colors' => 'WireUi\\Components\\Switcher\\WireUi\\Toggle\\Color',
      ),
    ),
    'components' => 
    array (
      'alert' => 
      array (
        'class' => 'WireUi\\Components\\Alert\\Index',
        'alias' => 'alert',
      ),
      'avatar' => 
      array (
        'class' => 'WireUi\\Components\\Avatar\\Index',
        'alias' => 'avatar',
      ),
      'badge' => 
      array (
        'class' => 'WireUi\\Components\\Badge\\Base',
        'alias' => 'badge',
      ),
      'mini-badge' => 
      array (
        'class' => 'WireUi\\Components\\Badge\\Mini',
        'alias' => 'mini-badge',
      ),
      'button' => 
      array (
        'class' => 'WireUi\\Components\\Button\\Base',
        'alias' => 'button',
      ),
      'mini-button' => 
      array (
        'class' => 'WireUi\\Components\\Button\\Mini',
        'alias' => 'mini-button',
      ),
      'card' => 
      array (
        'class' => 'WireUi\\Components\\Card\\Index',
        'alias' => 'card',
      ),
      'checkbox' => 
      array (
        'class' => 'WireUi\\Components\\Switcher\\Checkbox',
        'alias' => 'checkbox',
      ),
      'color-picker' => 
      array (
        'class' => 'WireUi\\Components\\ColorPicker\\Picker',
        'alias' => 'color-picker',
      ),
      'datetime-picker' => 
      array (
        'class' => 'WireUi\\Components\\DatetimePicker\\Picker',
        'alias' => 'datetime-picker',
      ),
      'description' => 
      array (
        'class' => 'WireUi\\Components\\Label\\Description',
        'alias' => 'description',
      ),
      'dialog' => 
      array (
        'class' => 'WireUi\\Components\\Dialog\\Index',
        'alias' => 'dialog',
      ),
      'dropdown' => 
      array (
        'class' => 'WireUi\\Components\\Dropdown\\Base',
        'alias' => 'dropdown',
      ),
      'dropdown.item' => 
      array (
        'class' => 'WireUi\\Components\\Dropdown\\Item',
        'alias' => 'dropdown.item',
      ),
      'dropdown.header' => 
      array (
        'class' => 'WireUi\\Components\\Dropdown\\Header',
        'alias' => 'dropdown.header',
      ),
      'error' => 
      array (
        'class' => 'WireUi\\Components\\Errors\\Single',
        'alias' => 'error',
      ),
      'errors' => 
      array (
        'class' => 'WireUi\\Components\\Errors\\Multiple',
        'alias' => 'errors',
      ),
      'icon' => 
      array (
        'class' => 'WireUi\\Components\\Icon\\Index',
        'alias' => 'icon',
      ),
      'input' => 
      array (
        'class' => 'WireUi\\Components\\TextField\\Input',
        'alias' => 'input',
      ),
      'currency' => 
      array (
        'class' => 'WireUi\\Components\\TextField\\Currency',
        'alias' => 'currency',
      ),
      'maskable' => 
      array (
        'class' => 'WireUi\\Components\\TextField\\Maskable',
        'alias' => 'maskable',
      ),
      'number' => 
      array (
        'class' => 'WireUi\\Components\\TextField\\Number',
        'alias' => 'number',
      ),
      'password' => 
      array (
        'class' => 'WireUi\\Components\\TextField\\Password',
        'alias' => 'password',
      ),
      'phone' => 
      array (
        'class' => 'WireUi\\Components\\TextField\\Phone',
        'alias' => 'phone',
      ),
      'label' => 
      array (
        'class' => 'WireUi\\Components\\Label\\Base',
        'alias' => 'label',
      ),
      'link' => 
      array (
        'class' => 'WireUi\\Components\\Link\\Index',
        'alias' => 'link',
      ),
      'modal' => 
      array (
        'class' => 'WireUi\\Components\\Modal\\Index',
        'alias' => 'modal',
      ),
      'modal-card' => 
      array (
        'class' => 'WireUi\\Components\\Modal\\Card',
        'alias' => 'modal-card',
      ),
      'native-select' => 
      array (
        'class' => 'WireUi\\Components\\Select\\Native',
        'alias' => 'native-select',
      ),
      'notifications' => 
      array (
        'class' => 'WireUi\\Components\\Notifications\\Index',
        'alias' => 'notifications',
      ),
      'radio' => 
      array (
        'class' => 'WireUi\\Components\\Switcher\\Radio',
        'alias' => 'radio',
      ),
      'select' => 
      array (
        'class' => 'WireUi\\Components\\Select\\Base',
        'alias' => 'select',
      ),
      'select.option' => 
      array (
        'class' => 'WireUi\\Components\\Select\\Option',
        'alias' => 'select.option',
      ),
      'select.user-option' => 
      array (
        'class' => 'WireUi\\Components\\Select\\UserOption',
        'alias' => 'select.user-option',
      ),
      'textarea' => 
      array (
        'class' => 'WireUi\\Components\\TextField\\Textarea',
        'alias' => 'textarea',
      ),
      'time-picker' => 
      array (
        'class' => 'WireUi\\Components\\TimePicker\\Picker',
        'alias' => 'time-picker',
      ),
      'time-selector' => 
      array (
        'class' => 'WireUi\\Components\\TimePicker\\Selector',
        'alias' => 'time-selector',
      ),
      'toggle' => 
      array (
        'class' => 'WireUi\\Components\\Switcher\\Toggle',
        'alias' => 'toggle',
      ),
      'popover' => 
      array (
        'class' => 'WireUi\\Components\\Popover\\Index',
        'alias' => 'popover',
      ),
      'switcher' => 
      array (
        'class' => 'WireUi\\Components\\Wrapper\\Switcher',
        'alias' => 'switcher',
      ),
      'text-field' => 
      array (
        'class' => 'WireUi\\Components\\Wrapper\\TextField',
        'alias' => 'text-field',
      ),
    ),
    'heroicons' => 
    array (
      'variant' => 'outline',
      'alias' => 'heroicons',
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'reverb' => 
      array (
        'driver' => 'reverb',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => NULL,
          'port' => 443,
          'scheme' => 'https',
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'cluster' => NULL,
          'host' => 'api-mt1.pusher.com',
          'port' => 443,
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'concurrency' => 
  array (
    'driver' => 'process',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => '12',
      'verify' => true,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
      'verify' => true,
    ),
    'rehash_on_login' => true,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'D:\\laravelproject\\devjobs\\resources\\views',
    ),
    'compiled' => 'D:\\laravelproject\\devjobs\\storage\\framework\\views',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
