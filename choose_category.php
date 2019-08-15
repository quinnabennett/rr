<?php

function chooseCategory() {
  $categories = array("all items", "hot food", "snacks", "drinks", "weekend products", "misc");
  $cat = array(array("Top Ramen", "Shin Cup", "Chicken Melt", "Hot Pocket"), array("Pocky", "Kettle Chips", "Choco-Pie"), array("Snapple", "Izze", "Coconut Water", "Water"),
  array("Ice Cream Sandwich", "Frappaccino", "Ice Cream Bar", "Strawberry Bar"), array("Case of Water", "Pillow", "Toothpaste"));

  echo "\nto select, enter the number next to your selection\n";
  print_r($categories);
  $catg = (strtolower(trim(fgets(fopen("php://stdin", "r"))))-1);
  print_r($cat[$catg]);
}

?>
