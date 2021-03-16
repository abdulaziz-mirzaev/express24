<?php

namespace Tests;

use App\OutputList;
use PHPUnit\Framework\TestCase;

class OutputListTest extends TestCase
{
    public function test_it_parses_a_given_string_into_array()
    {
        $parser = new OutputList('243');

        $result = $parser->parse('243');
        $expected = [2, 4, 3];

        $this->assertSame($expected, $result);
    }
}