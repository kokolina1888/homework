<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
  <?php 
  function print_pages($arr, $tag1, $tag2, $tag3, $tag4){
    $count = count($arr);
    echo "<$tag1>";
    for ($i= 0; $i < $count  ; $i++) { 
      echo "<$tag2>".$arr[$i]."</$tag3>";
    }
    echo "</$tag4>";
  }
  ?>
  <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <h4>Site Index</h4>
    <span class="caret"></span>
  </button>
  <?php 
  $site_pages = array('Mens', 'Ladies', 'Kids', 'Football Shirts', 'Accessories', 'Sports', 'Brands', 'Sale');
  print_pages($site_pages, 'ul class="dropdown-menu" aria-labelledby="dropdownMenu1"', 'li><a href="#"', 'a></li', 'ul' );
  ?>
</div>

  </body>
  </html>
