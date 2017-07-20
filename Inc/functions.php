<?php
  function get_item_html($id, $item) {
  $output =  "<li>
      <a href='details.php?id="
        . $id . " '>
        <img src=' ". $item["img"]." ' alt=' ".$item["title"]." ' />
        <p>View Details</p>
      </a>
      </li>";
      return $output;
  }

// MODIFY FUNCTION TO SHOW EITHER THE ENTIRE CATALOG OR A SPECIFIC CATEGORY.
  function array_category($catalog, $category) {

    $output = array();
    foreach($catalog as $id => $item) {
      if($category === null OR strtolower($category) == strtolower($item["category"])) {
        // WILL BE SORTING BY TITLE
        $sort = $item["title"];
        // REMOVE 'THE', 'A' AND 'AN' FROM THE TITLE
        $sort = ltrim($sort, "The ");
        $sort = ltrim($sort, "A ");
        $sort = ltrim($sort, "An ");
        $output[$id] = $sort;
      }
    }
    asort($output);
    return array_keys($output);
  }
 ?>
