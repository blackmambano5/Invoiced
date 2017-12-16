<?php

use ConceptCore\Invoiced\InvoicedServiceProvider;
use League\Container\Container;

require_once __DIR__ . "/vendor/autoload.php";

$container = new Container();
$container->addServiceProvider(new InvoicedServiceProvider);