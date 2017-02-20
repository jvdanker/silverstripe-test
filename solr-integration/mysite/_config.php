<?php

global $project;
$project = 'mysite';

global $database;
$database = 'solr-integration';

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

Director::addRules(100, array(
	'search' => 'SearchController'
));

/*
Page_Controller::$search_index_class = 'TestIndex';
Page_Controller::$classes_to_search[] = array(
	'class' => 'File',
	'includeSubclasses' => true
);
*/