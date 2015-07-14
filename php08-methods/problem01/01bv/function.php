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
  function print_pages($arr, $tag1, $tag2, $tag3){
    $count = count($arr);
    echo "<$tag1>";
    for ($i= 0; $i < $count  ; $i++) { 
      echo "<$tag2>".$arr[$i]."</$tag2>";
    }
    echo "</$tag3>";
  }
  ?>