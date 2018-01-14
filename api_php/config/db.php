<?php

return [
    'class' => 'yii\db\Connection',
    // 'dsn' => 'pgsql:host=db;dbname=flyinspect',
    'dsn' => 'pgsql:host=127.0.0.1;dbname=flyinspect',
    'username' => 'flyinspect',
    'password' => 'fly@inspect',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
