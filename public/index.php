<?php

use App\Kernel;
use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/../vendor/autoload.php';

if (!isset($_SERVER['APP_ENV'])) {
    $environment = 'dev';
} else {
    $environment = $_SERVER['APP_ENV'];
}

$isBehatScriptRunning = isset($_SERVER['argv']) && isset($_SERVER['argv'][0]) && $_SERVER['argv'][0] === 'vendor/bin/behat';

if ($_SERVER['APP_DEBUG'] ?? ('prod' !== ($environment ?? 'dev'))) {
    umask(0000);
    Debug::enable();
}

if (!$isBehatScriptRunning) {
    $kernel = new Kernel(
        $environment ?? 'dev', $_SERVER['APP_DEBUG'] ?? ('prod' !== ($environment ?? 'dev'))
    );
    $request = Request::createFromGlobals();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);
}

