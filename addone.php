<?php
include_once ("header.php");
?>
<h1>Add New Title</h1>

<form action = "addone.php" method="POST">
  
  <div>Title <input type="text" name ="title"></div>
  <div>Author <input type="text" name ="author"></div>
  Category <select>
  <option value = "Fiction">Fiction</option>
  <option value = "Non-Fiction">Non-Fiction</option>
  <option value = "Play">Play</option>
  </select>
  
  <div>Year <input type="text" name ="year"></div>
  <div>ISBN <input type="text" name ="isbn"></div>
 
  <input type="Submit" value = "Enter">
  
</form>

<?php
include_once ("footer.php");
?>