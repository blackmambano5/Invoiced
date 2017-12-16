<?php

namespace ConceptCore\Invoiced;

use League\Container\Container;

class Core
{
    /** @var Container */
    private $container;

    /**
     * Core constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->boot();
    }

    public function boot()
    {
        var_dump($this->container);

//        $this->container->add(TransferObjectInterface::class, TransferObject::class);
    }
}