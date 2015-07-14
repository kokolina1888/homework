	<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>
  <?php echo $page_title;?>
</title>
</head>
<body>
  <h1>
    <?php echo $page_title;?>
  </h1>
  <?php 
  function print_pages($arr, $tag1, $tag2, $tag3){
    echo "<div class='dropdown'>
  <button class='btn btn-danger dropdown-toggle' type='button' id='dropdownMenu1' 
  data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>
    <h4>Site Index</h4>
    <span class='caret'></span>
  </button>";
    $count = count($arr);
    echo "<$tag1>";
    for ($i= 0; $i < $count  ; $i++) { 
      echo "<$tag2>".$arr[$i]."</$tag2>";
    }
    echo "</$tag3>";
    echo "</div>";
  }
  ?>