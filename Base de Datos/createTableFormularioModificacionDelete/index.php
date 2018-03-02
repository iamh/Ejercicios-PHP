<?php
  include 'utils/functionsForm.php';
  include 'utils/functionBD.php';
  session_start();
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
	      <button type="submit" class="img" name="insert"><img src="utils/img/insert.png" width="100" height="100"></button><br>
	      <button type="submit" class="img" name="mod"><img src="utils/img/mod.png" width="100" height="100"></button>
	    </form>
    </div>
    <div class="frame2">
     <?php
        if (isset($_POST["create"])) {
         	formCreate();
        } elseif (isset($_POST["insert"])) {
          	formTable();
        } elseif (isset($_POST['mod'])) {
        	formModTable();
        }

        if (isset($_POST['button_table'])) {
          	createTable();
        } elseif (isset($_POST['button_delete_book'])) {
          $table = "book";
          deleteTable($table);
        } elseif (isset($_POST['button_delete_customer'])) {
          $table = "customer";
          deleteTable($table);
        }

        if (isset($_POST['table'])) {
          	$_SESSION['table'] = $_POST['table'];
          	if ($_POST['table'] == 'book') {
            	formBook( $_SESSION['table']);
          	} elseif ($_POST['table'] == 'customer') {
            	formCustomer( $_SESSION['table']);
          	}
        }

        if (isset($_POST['button_book'])) {
            insertBook($_SESSION['table'], $_POST['isbn'], $_POST['title'], $_POST['author'], $_POST['stock'], $_POST['price']);
        } elseif (isset($_POST['button_customer'])) {
            insertCustomer($_SESSION['table'], $_POST['firstname'], $_POST['surname'], $_POST['email'], $_POST['type']);
        }

        if (isset($_POST['mtable'])) {
          	$_SESSION['table'] = $_POST['mtable'];
          	if ($_POST['mtable'] == 'book') {
            	searchIdBook($_SESSION['table']);
        	} elseif ($_POST['mtable'] == 'customer') {
        		searchIdCustomer($_SESSION['table']);
        	}
        }

  	    if (isset($_POST['button_mod_book'])) {
  	    	$_SESSION['id'] = $_POST['mId'];
          bdBook($_SESSION['table'], $_SESSION['id']);
        } elseif (isset($_POST['button_mod_customer'])) {
        	$_SESSION['id'] = $_POST['mId'];
        	bdCustomer($_SESSION['table'],$_SESSION['id']);
        }

        if (isset($_POST['button_bdBook'])) {
        	 editBook($_SESSION['table'], $_SESSION['id'], $_POST['isbn'], $_POST['title'], $_POST['author'], $_POST['stock'], $_POST['price']);
        }	elseif (isset($_POST['button_bdCustomer'])) {
           	editCustomer($_SESSION['table'], $_SESSION['id'], $_POST['firstname'], $_POST['surname'], $_POST['email']);
        }
    ?>
    </div>
  </div>
</body>
</html>