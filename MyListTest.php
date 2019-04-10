<?php
include 'MyList.php';
$myListTest = new MyList();
$myListTest->add(1);
$myListTest->add(2);
$myListTest->add(3);
$myListTest->add("Hello");
$myListTest->add("Stupid");
$myListTest->add("one");
echo implode('-', $myListTest->arrayList);
$myListTest->get(3);
echo "<br>" . $myListTest->get(3) . "<br>";
$myListTest->remove(3);
echo "My List after remove <br>";
echo implode('-', $myListTest->arrayList) . "<br>";
$myListTest->clear();
echo "My List after clear <br>";
var_dump($myListTest);