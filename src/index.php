<?php
require_once "classes.php";
require_once "functions.php";

$list1 = new LinkedList([9, 9, 9, 9, 9, 9, 9]);
$list2 = new LinkedList([9, 9, 9, 9]);

$result = calculate($list1, $list2)->getResult();

dump($result);



