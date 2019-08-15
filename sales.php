<?php

$categories = array("All Items", "Hot Food", "Snacks", "Drinks", "Weekend Products", "Misc");
$all_items = array(array("Top Ramen", "Shin Cup", "Chicken Melt", "Hot Pocket"), array("Pocky", "Kettle Chips", "Choco-Pie"), array("Snapple", "Izze", "Coconut Water", "Water"),
array("Ice Cream Sandwich", "Frappaccino", "Ice Cream Bar", "Strawberry Bar"), array("Case of Water", "Pillow", "Toothpaste"));
  $hot_food = $all_items[0];
    $top_ramen = array("Chicken", "Beef");
  $snacks = $all_items[1];
    $pocky = array("Strawberry", "Chocolate");
      $strawberry_pocky = array("Large", "Small");
      $strawberry_pocky = array("Large", "Small");
    $kettle_chips = array("Sea Salt", "Cheddar", "Vinegar");
  $drinks = $all_items[2];
    $snapple = array("Lemon", "Peach");
    $izze = array("Apple", "Clementine");
  $weekend_products = $all_items[3];
    $ice_cream_sandwich = array("Caramel", "Vanilla");
  $misc = $all_items[4];

echo "\nHello! Welcome to the fake store where you will not actually receive anything :)\n";
echo "To select, simply input the number pointed at your selection. When you're done wasting your time here, type 'all done, bye-bye' to check out. Happy fake shopping!\n\n";

print_r($categories) . "\n\n";
$input = trim(fgets(fopen("php://stdin","r")));

?>
