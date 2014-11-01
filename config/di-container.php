<?php
use Lcobucci\DependencyInjection\Builders\XmlBuilder;

$builder = new XmlBuilder();

return $builder->getContainer(require __DIR__ . '/di-config.php');
