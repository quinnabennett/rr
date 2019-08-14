<?php

class Item {
  function set_name($object_name) {
    $this->name = $object_name;
  }
  function get_name() {
    return $this->name;
  }
  function set_price($price) {
    $this->price = $price;
  }
  function get_price() {
    return $this->price;
  }
}

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

    $items[$x]->set_name($name);
    $items[$x]->set_price("$" . $price);
  }

  echo "\n";

  for ($x=0; $x<$num; $x++) {
    echo $items[$x]->get_name() . "   " . $items[$x]->get_price() . "\n";
  }

}

enterNewItems();

/*TODO:

Connect to database to store items, prices, inventory, etc.
Create user route: categories, items, types of items, sizes
Create checkout
Send orders to managers/workers
Manager access - remove items
Manager access - edit inventories

*/

?>
