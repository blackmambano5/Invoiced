<?php

namespace ConceptCore\Objects\Core;

use ConceptCore\Interfaces\Objects\Core\TransferObjectInterface;

class TransferObject implements TransferObjectInterface
{
    /**
     * @var array
     */
    protected $fillAble = [];

    /**
     * @var array
     */
    protected $hidden = [];

    /**
     * @param string $parameter
     * @param $value
     * @return void
     */
    public function set(string $parameter, $value): void
    {
        // TODO: Implement set() method.
    }

    /**
     * @param string $parameter
     * @return mixed
     */
    public function get(string $parameter)
    {
        // TODO: Implement get() method.
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }

    /**
     * @param array $dataArray
     * @return void
     */
    public function setFromArray(array $dataArray): void
    {
        // TODO: Implement setFromArray() method.
    }
}