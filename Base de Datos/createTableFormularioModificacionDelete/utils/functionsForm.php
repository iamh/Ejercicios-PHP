<?php
	function formCreate() {
		echo "
	    <form action='index.php' method='POST'>
			<h2>Aceptar para crear la tabla</h2>
	        <input type='submit' value='Aceptar' name='button_table'><br><br>
	        <h2>Borrar tablas</h2>
	        <input type='submit' value='Borrar Book' name='button_delete_book'><br><br>
	        <input type='submit' value='Borrar Customer' name='button_delete_customer'><br><br>
	    </form>";
	}

	function formTable () {
		echo "
		    <form action='index.php' method='POST'>
				<h2>Tabla a insertar datos</h2>
		        <p><input type='radio' name='table' value='book' required>Books</p>
			    <p><input type='radio' name='table' value='customer' required>Customers</p>
			    <p><input type='radio' name='table' value='sale' required>Sales</p>
			    <p><input type='radio' name='table' value='borrowed_books' required>Borrowed Books</p>
			    <p><input type='radio' name='table' value='sale_book' required>Sale Books</p>
		        <input type='submit' value='insertar' name='insertTable' required><br><br>
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
            	    <option value='basic'>Basico</option>
                    <option value='premium'>Premium</option>
                </select><br><br>
                <input type='submit' name='button_customer' value='Create'>
            </form>";
 	}

 	function formModTable () {
		echo "
		    <form action='index.php' method='POST'>
				<h2>Tabla a modificar datos</h2>
		        <p><input type='radio' name='mtable' value='book' required>Books</p>
			    <p><input type='radio' name='mtable' value='customer' required>Customers</p>
		        <input type='submit' value='modificar' name='modTable' required><br><br>
		    </form>";
	}

	function searchIdBook($table) {
		echo "
		<h3>Ingrese el id de la tabla ". $table ."</h3>
			<form action='index.php' method='POST'>
			<input type='text' name='mId' placeholder='Enter the id' required autocomplete='off'>
			<input type='submit' name='button_mod_book' value='Aceptar'>
            </form>";
	}

	function searchIdCustomer($table) {
		echo "
		<h3>Ingrese el id de la tabla ". $table ."</h3>
			<form action='index.php' method='POST'>
			<input type='text' name='mId' placeholder='Enter the id' required autocomplete='off'>
			<input type='submit' name='button_mod_customer' value='Aceptar'>
            </form>";
	}

?>