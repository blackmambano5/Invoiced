<?php

use ConceptCore\Invoiced\InvoicedServiceProvider;
use League\Container\Container;

require_once __DIR__ . "/vendor/autoload.php";

$container = new Container();
$container->addServiceProvider(new InvoicedServiceProvider);

/** @var \ConceptCore\Invoiced\Core $core */
$core = $container->get(\ConceptCore\Invoiced\Core::class);

echo $core->test() . "\n";