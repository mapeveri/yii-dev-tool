<?php

/**
 * See file packages.local.php.example for customization examples.
 *
 * DO NOT EDIT THIS FILE. To customize the configuration, create your local configuration
 * packages.local.php using file packages.local.php.example as example.
 */
$packages = [
    'docs' => true,

    // core packages
    'di' => true,
    'injector' => true,
    'factory' => true,
    'access' => true,
    'event-dispatcher' => true,
    'security' => true,
    'data' => true,
    'profiler' => true,
    'aliases' => true,
    'serializer' => true,
    'network-utilities' => true,
    'auth' => true,
    'http' => true,

    // cache
    'cache' => true,
    'cache-apcu' => true,
    'cache-wincache' => true,
    'cache-file' => true,
    'cache-db' => true,
    'cache-memcached' => true,

    // RBAC
    'rbac' => true,
    'rbac-db' => true,
    'rbac-php' => true,

    // log
    'log' => true,
    'log-target-db' => true,
    'log-target-email' => true,
    'log-target-file' => true,
    'log-target-syslog' => true,

    // i18n
    'i18n' => true,
    'i18n-translator' => true,
    'i18n-message-php' => true,
    'i18n-message-gettext' => true,
    'i18n-formatter-intl' => true,

    // queue
    'yii-queue' => true,
    'yii-queue-interop' => true,

    // mutex
    'mutex' => true,
    'mutex-file' => true,
    'mutex-db-pgsql' => true,
    'mutex-db-oracle' => true,
    'mutex-db-mysql' => true,

    // mailer
    'mailer' => true,
    'mailer-swiftmailer' => true,

    // helpers
    'arrays' => true,
    'strings' => true,
    'files' => true,
    'var-dumper' => true,
    'html' => true,
    'json' => true,

    // console
    'yii-console' => true,

    // api
    'yii-rest' => true,

    // db
    'db' => true,
    'db-mysql' => true,
    'db-pgsql' => true,
    'db-sqlite' => true,
    'db-mssql' => true,
    'db-oracle' => true,
    'db-mongodb' => true,
    'active-record' => true,
    //'migration' => true,
    'yii-cycle' => true,

    // router
    'router' => true,
    'router-fastroute' => true,

    // web
    'yii-web' => true,
    'view' => true,
    'widget' => true,
    'yii-widgets' => true,
    'assets' => true,
    'yii-jquery' => true,
    'yii-masked-input' => true,
    'yii-dataview' => true,
    'yii-debug' => true,
    'yii-debug-viewer' => true,
    'yii-gii' => true,
    'yii-bootstrap4' => true,

    'yii-captcha' => true,

    'yii-auth-client' => true,

    // project templates
    'yii-base-api' => true,
    'yii-base-web' => true,
    'yii-project-template' => true,

    // demo
    'yii-demo' => true,

    // other
    'yii-docker' => true,
    'validator' => true,
    'friendly-exception' => true,

    // repository template
    'template' => true,

    // requirements checker
    'requirements' => true,
];

if (file_exists($localFile = __DIR__ . '/packages.local.php')) {
    /** @noinspection PhpIncludeInspection */
    $packages = array_merge($packages, require $localFile);
}

return $packages;
