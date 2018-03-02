<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Table</title>
	<style type="text/css">
		body {
			background-color: #eee;
		}
		main {
			background-color: #fff;
			padding: 1em;
			border-radius: 5px;
			display: flex;
			min-width: 250px;
		}
		main > *{
    	width: 100%;
		}
		.container {
			margin: auto;
			margin-top: 2em;
			margin-bottom: 2em;
			width: 80%;
      height: 500px;
			border: 4px solid cadetblue;
			border-radius: 8px;
			background-color: #FAFAFA;
		}
		.frame {
			border: 3px solid #003366;
			width: 40%;
			margin: auto;
			padding: 1em;
			margin-top: 1em;
			margin-bottom: 2em;
			border-radius: 5px;
		}
		h2 {
			text-align: center;
			margin-top: 0;
			background-color: #E2A9F3;
			color: 
		}
    .img {
      width: 100px;
      height: 100px;
      margin-left: 3em;
      margin-top: 3em;
      cursor: pointer;
      border: none;
      background-color: transparent;
    }
   
	</style>
</head>
<body>
  <div class="container">
    <form action="index.php" method="POST" class="d-flex flex-column first-form">
      <button type="submit" class="img" name="crear"><img src="img/click.png" width="100" height="100"></button>
    </form>
    <div class="frame">
      <?php
     
        include('function.php');
        
        if (isset($_POST["crear"]))  {
          createTable();
     
        }
      ?>
    </div>
  </div>
</body>
</html>