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

  function set_category($category) {
    $this->category = $category;
  }
  function get_category() {
    return $this->category;
  }
}

?>
