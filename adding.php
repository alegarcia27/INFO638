<?php
include_once ("header.php");
?>

<form action = "added.php" method="POST">
  
  <div>Museum <input type="text" name ="museum_name"></div>
  Rating <select>
  <option value = "1">1</option>
  <option value = "2">2</option>
  <option value = "3">3</option>
  <option value = "4">4</option>
  <option value = "5">5</option>
  <option value = "6">6</option>  
  <option value = "7">7</option>
  <option value = "8">8</option>
  <option value = "9">9</option>
  <option value = "10">10</option>
  </select>
  <div>Title of Review <input type="text" name ="title_of_review"></div>
  <div>Review <textarea name="textarea" style="width:250px;height:150px;"></textarea></div>
 
  <input type="Submit" value = "Enter">
  
</form> 
<?php
include_once ("footer.php");
?>