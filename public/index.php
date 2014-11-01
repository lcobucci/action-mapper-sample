<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Lcobucci\ActionMapper2\Config\ApplicationBuilder;

$app = ApplicationBuilder::build(
    __DIR__ . '/../config/routes.xml',
    require __DIR__ . '/../config/di-config.php'
);

$app->run();
