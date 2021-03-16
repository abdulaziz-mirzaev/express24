<?php


namespace Tests;


use App\LinkedList;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    public function test_it_checks_the_value_generation()
    {
        $testArray = [1, 2, 3];

        $list = new LinkedList($testArray);

        $result = $list->getValue();
        $expected = 321;

        $this->assertSame($expected, $result);
    }

}