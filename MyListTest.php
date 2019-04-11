<?php
include 'MyList.php';
$myListTest = new MyList();
$myListTest->add(1);
$myListTest->add(2);
$myListTest->add(3);
$myListTest->add("Hello");
$myListTest->add("Stupid");
$myListTest->add("one");
echo "My List: " . implode('-', $myListTest->arrayList). "<br>";
echo "Get item[3]: " . $myListTest->get(3). "<br>";
$myListTest->remove(3);
echo "My List after remove item[3]: " . implode('-', $myListTest->arrayList) . "<br>";
$myListTest->clear();
echo "My List after clear <br>";
echo $myListTest->arrayList . "<br>";
var_dump($myListTest);