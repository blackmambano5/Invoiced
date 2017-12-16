<?php

namespace ConceptCore\Objects\Invoiced;

use ConceptCore\Objects\Core\TransferObject;

class Item extends TransferObject
{
    /** @var string */
    private $name;

    /** @var int */
    private $quantity;

    /** @var int */
    private $unitCost;
}