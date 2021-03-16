<?php

namespace App;

class LinkedList
{
    private $nodes;

    public function __construct(array $nodes)
    {
        $this->nodes = $nodes;
    }

    /**
     * Returns the actual value for the given nodes
     * @return int
     */
    public function getValue(): int
    {
        return (int)implode("", array_reverse($this->nodes));
    }

    /**
     * Returns the array of nodes, which were initially entered
     * @return array
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }
}