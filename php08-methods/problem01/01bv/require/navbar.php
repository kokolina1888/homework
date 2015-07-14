<?php 
require_once('require/function_navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>
    <?php echo $page_title;?>
  </title>
</head>
<body>
  <h1>
    <?php echo $page_title;?>
  </h1>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Sale <span class="sr-only">(current)</span></a></li>
          <li><a href="#">News</a></li>
        <li class='dropdown'>
  <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Sport<span class='caret'></span></a>
  <ul class='dropdown-menu'>
          <?php 
            $options = array('Football shirts', 'Accessories', 'Sports', 'Brands', 'Sale');
            print_navbar($options, 'li');
            ?>          
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li class='dropdown'>
  <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Site Index <span class='caret'></span></a>
  <ul class='dropdown-menu'>
        <?php 
          $site_pages = array('<a href="index.php">Home</a>', '<a href="Mens.php">Men</a>', '<a href="Ladies.php">Ladies</a>', '<a href="Kids.php">Kids</a>');
          print_navbar($site_pages, 'li');
          ?>          
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>
</body>
</html>