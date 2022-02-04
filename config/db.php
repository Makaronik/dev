<?php

return [
        'class' => 'yii\db\Connection',
//        'dsn' => 'pgsql:host=localhost;port=5432;dbname=books',
        'dsn' => 'pgsql:host=postgres;port=5432;dbname=dev_db_test',
        'username' => 'dev_user',
        'password' => 'dev',
        'charset' => 'utf8',
        'enableSchemaCache' => true,
        // Продолжительность кеширования схемы.
        'schemaCacheDuration' => 3600,
        // Название компонента кеша, используемого для хранения информации о схеме
        'schemaCache' => 'cache'
];
