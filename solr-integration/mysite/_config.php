<?php

global $project;
$project = 'mysite';

global $database;
$database = '';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');

Solr::configure_server(array(
    'host' => 'localhost',
    'indexstore' => array(
        'mode' => 'file',
        'path' => BASE_PATH . '/.solr'
    )
));
