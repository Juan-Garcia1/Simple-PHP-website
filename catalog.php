<?php
include("Inc/data.php");
include("Inc/functions.php");

$pageTitle = "Full Catalog";
// ADDING AN ACTIVE STATE TO THE NAVIGATION
$section = null;

// CHECK FOR CAT
if(isset($_GET["cat"])) {
  // CHECK IF CAT IS EQUAL TO  books
  if($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
    // CHECK IF CAT IS EQUAL TO movies
  } else if($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
    // CHECK IF CAT IS EQUAL TO music
  } else if($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

 include('Inc/header.php'); ?>

<div class="section catalog page">
  <div class="wrapper">
    <h1>
      <?php
    // IF SECTION DOES HAVE A VALUE(BOOKS,MOVIES,MUSIC), WILL DISPLAY ITS CATEGORY
    if($section != null) {
      echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
    }
    echo $pageTitle;
     ?>
   </h1>
    <ul class="items">
      <?php
      // LIST CATEGORIES TO ITS CORRESPONDING SECTION... EX: BOOKS SECTION WILL DISPLAY BOOKS AND SO ON
        $categories = array_category($catalog, $section);
          foreach ($categories as $id) {
             echo get_item_html($id, $catalog[$id]);
          }
      ?>
    </ul>
  </div>
</div>

<?php include('Inc/footer.php'); ?>
