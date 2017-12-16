<?php

namespace ConceptCore\Invoiced;

use League\Container\ServiceProvider\AbstractServiceProvider;

class InvoicedServiceProvider extends AbstractServiceProvider
{
    public function __construct()
    {
        var_dump($this->getContainer());
    }

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {
        $this->getContainer()->add(Core::class);
    }
}