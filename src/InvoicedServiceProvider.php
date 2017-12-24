<?php

namespace ConceptCore\Invoiced;

use ConceptCore\Interfaces\Objects\Core\TransferObjectInterface;
use ConceptCore\Objects\Core\TransferObject;
use League\Container\ServiceProvider\AbstractServiceProvider;

class InvoicedServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Core::class,
        TransferObjectInterface::class => TransferObject::class,
    ];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->provides as $implementation => $concrete) {
            if (is_callable($implementation)) {
                $this->getContainer()->add($implementation, $concrete);
            } else {
                $this->getContainer()->add($concrete);
            }
        }
    }
}