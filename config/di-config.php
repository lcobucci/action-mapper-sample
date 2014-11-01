<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use Lcobucci\ActionMapper2\DependencyInjection\ContainerConfig;

AnnotationRegistry::registerLoader(
    array(require __DIR__ . '/../vendor/autoload.php', 'loadClass')
);

return new ContainerConfig(
    __DIR__ . '/services.xml',
    __DIR__ . '/../tmp',
    ['app.basedir' => realpath(__DIR__ . '/../') . '/'],
    null,
    false
);
