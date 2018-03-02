<?php
  include 'utils/functionsForm.php';
  include 'utils/functionBD.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Table</title>
	<link rel="stylesheet" type="text/css" href="utils/css/style.css">
</head>
<body>
  <div class="container">
  	<div class="frame1">
	    <form method="POST" class="d-flex flex-column first-form">
	      <button type="submit" class="img" name="create"><img src="utils/img/click.png" width="100" height="100"></button><br>
	      <button type="submit" class="img" name="insert"><img src="utils/img/insert.png" width="100" height="100"></button>
	    </form>
    </div>
    <div class="frame2">
      <?php
        if (isset($_POST["create"])) {
          formCreate();
        }
        if (isset($_POST["insert"])) {
          formTable();
        }
        if (isset($_POST['table'])) {
          $table = $_POST['table'];
          if ($_POST['table'] == 'book') {
            formBook($table);
          } elseif ($_POST['table'] == 'customer') {
            formCustomer($table);
          }
        }
        if (isset($_POST['button_table'])) {
          createTable();
        }
        if (isset($_POST['button_book'])) {
          $table = 'book';
          insertBook($table, $_POST['isbn'], $_POST['title'], $_POST['author'], $_POST['stock'], $_POST['price']);
        }
        if (isset($_POST['button_customer'])) {
          $table = 'customer';
          insertCustomer($table, $_POST['firstname'], $_POST['surname'], $_POST['email'], $_POST['type']);
        }
        
      ?>
    </div>
  </div>
</body>
</html>