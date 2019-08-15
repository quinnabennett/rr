<?php

function enterNewItems() {

  echo "How many new items would you like to enter?\n";
  $num = trim(fgets(fopen("php://stdin", "r")));

  global $items;

  for ($x=0; $x<$num; $x++){
    $items[$x] = new Item;

    echo "\nName of item " . $item_num=$x+1 . ": ";
    $name = trim(fgets(fopen("php://stdin", "r")));

    echo "Price: $";
    $price = trim(fgets(fopen("php://stdin", "r")));

    echo "Category: ";
    $category = strtolower(trim(fgets(fopen("php://stdin", "r"))));

    $items[$x]->set_name($name);
    $items[$x]->set_price("$" . $price);
    $items[$x]->set_category("$" . $category);
  }

  echo "\n";

  for ($x=0; $x<$num; $x++) {
    echo $items[$x]->get_name() . "   " . $items[$x]->get_price() . "\n";
  }

}

?>
