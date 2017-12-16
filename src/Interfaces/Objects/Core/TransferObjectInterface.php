<?php

namespace ConceptCore\Interfaces\Objects\Core;

interface TransferObjectInterface
{
    /**
     * @param string $parameter
     * @param $value
     * @return void
     */
    public function set(string $parameter, $value): void;

    /**
     * @param string $parameter
     * @return mixed
     */
    public function get(string $parameter);

    /**
     * @return array
     */
    public function toArray(): array;

    /**
     * @param array $dataArray
     * @return void
     */
    public function setFromArray(array $dataArray): void;
}