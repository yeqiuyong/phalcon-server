<?php

error_reporting(E_ALL);

use Phalcon\Mvc\Application;
use Phalcon\Config\Adapter\Ini as ConfigIni;

$response = null;

try {
    define('APP_PATH', realpath('..') . '/');

    /**
     * Read the configuration
     */
    $config = new ConfigIni(APP_PATH . 'app/config/config.ini');
    if (is_readable(APP_PATH . 'app/config/config.ini.dev')) {
        $override = new ConfigIni(APP_PATH . 'app/config/config.ini.dev');
        $config->merge($override);
    }

    /**
     * Auto-loader configuration
     */
    require APP_PATH . 'app/config/loader.php';

    /**
     * Load application services
     */
    require APP_PATH . 'app/config/services.php';

    $application = new Application($di);

    /**
     * Multipal modules configuration,
     */
    require APP_PATH . 'app/config/modules.php';

    //echo $application->handle()->getContent();

    // Start application
    //$application->handle();

    // Set content
    $content = $application->handle()->getContent();

    $application->response->setContent($content);

    $response = $application->response;


} catch (Exception $e){
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}

// Send response
if($response){
    $response->sendHeaders();
    $response->send();
}