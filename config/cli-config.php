<?php
use Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;
use Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper;
use Doctrine\DBAL\Migrations\Tools\Console\Command as Migrations;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Helper\DialogHelper;

$container = require __DIR__ . '/di-container.php';

$commands[] = new Migrations\DiffCommand();
$commands[] = new Migrations\ExecuteCommand();
$commands[] = new Migrations\GenerateCommand();
$commands[] = new Migrations\MigrateCommand();
$commands[] = new Migrations\StatusCommand();
$commands[] = new Migrations\VersionCommand();

return new HelperSet(
    [
        'db' => new ConnectionHelper($container->get('orm.connection')),
        'em' => new EntityManagerHelper($container->get('orm.em')),
        'dialog' => new DialogHelper()
    ]
);
