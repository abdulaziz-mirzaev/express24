<?php
function dump(...$vars)
{
    foreach ( $vars as $var ) {
        echo "<pre style='font-size: 16px'>";
        print_r($var);
        echo "</pre>";
        echo "<hr>";
    }
}

function vdump(...$vars)
{
    foreach ( $vars as $var ) {
        echo "<pre style='font-size: 16px'>";
        var_dump($var);
        echo "</pre>";
        echo "<hr>";
    }
}

function calculate(LinkedList $list1, LinkedList $list2): OutputList
{
    $number = $list1->getValue() + $list2->getValue();
    return new OutputList($number);
}
