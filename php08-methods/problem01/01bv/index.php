<?php 
require_once('function.php')
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Home</title>
</head>
<body>
<h1>Home</h1>
 <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <h4>Site Index</h4>
    <span class="caret"></span>
  </button>
  <?php 
  $site_pages = array('<a href="index.php">Home</a>', '<a href="Mens.php">Men</a>', '<a href="Ladies.php">Ladies</a>', '<a href="Kids.php">Kids</a>', 'Football Shirts', 'Accessories', 'Sports', 'Brands', 'Sale');
  print_pages($site_pages, 'ul class="dropdown-menu" aria-labelledby="dropdownMenu1"', 'li', 'ul' );
  ?>
</div>

</body>
</html>
