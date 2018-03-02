<?php
	function formCreate() {
		echo "
	    <form action='index.php' method='POST'>
			<h2>Aceptar para crear la tabla</h2>
	        <input type='submit' value='Aceptar' name='button_table'><br><br>
	    </form>";
	}

	function formTable () {
	echo "
	    <form action='index.php' method='POST'>
			<h2>Tabla a insertar datos</h2>
	        <p><input type='radio' name='table' value='book'>Books</p>
		    <p><input type='radio' name='table' value='customer'>Customers</p>
		    <p><input type='radio' name='table' value='sale'>Sales</p>
		    <p><input type='radio' name='table' value='borrowed_books'>Borroweds</p>
		    <p><input type='radio' name='table' value='sale_book'>Sale Books</p>
	        <input type='submit' value='next' name='next'><br><br>
	    </form>";
	}

	function formBook($table) {
		echo "<h3> Enter the data of the ". $table ."</h3>";
      	echo "
      		<form action='index.php' method='POST'>
	            <input type='text' name='isbn' placeholder='Enter the isbn' required autocomplete='off'><br>
	            <input type='text' name='title' placeholder='Title' required autocomplete='off'><br>
	            <input type='text' name='author' placeholder='Author' required autocomplete='off'><br>
	            <input type='text' name='stock' placeholder='Stock' required autocomplete='off'><br>
	            <input type='text' name='price' placeholder='Price' required autocomplete='off'><br><br>
	            <input type='submit' name='button_book' value='Insert'>
            </form>";
    }

  	function formCustomer($table) {
  		echo "<h3> Enter the data of the ". $table ."</h3>";
  		echo "
  			<form action='index.php' method='POST'>
                <input type='text' name='firstname' placeholder='First Name' required autocomplete='off'><br>
                <input type='text' name='surname' placeholder='Surname' required autocomplete='off'><br>
                <input type='email' name='email' placeholder='Enter the email' required autocomplete='off'><br><br>
                <select name='type'>
            	    <option value='basic' selected>Basico</option>
                    <option value='premium'>Premium</option>
                </select><br><br>
                <input type='submit' name='button_customer' value='Create'>
            </form>";
 	}


?>