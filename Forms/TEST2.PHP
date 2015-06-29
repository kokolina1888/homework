<form name="testForm" method="post">

<?php $cnt = isset($_POST["cnt"]) ? $_POST["cnt"] : 0; ?>
<?php
  if(isset($_POST['next'])){
    if($cnt< 10){
      echo "<!-- ".$cnt.' --> ';
      $cnt++;
      echo $cnt;
    }
  }
?>
<input type="hidden" name="cnt" value="<?php echo $cnt;?>" />
<input type="submit" name="next" id="next" value="NEXT"/>
</form>