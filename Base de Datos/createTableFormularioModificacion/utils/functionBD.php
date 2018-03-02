<?php
	include 'config/config.php';
	include 'functionsSelect.php';

	function createTable() {
		try {
			$bd = new PDO(DBNAME,USER,PASSWORD);
			$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			
			//sql to create book
			$sql = "CREATE TABLE book (
				id INT(10) AUTO_INCREMENT PRIMARY KEY,
				isbn VARCHAR(13) UNIQUE,
				title VARCHAR(255),
				author VARCHAR(255),
				stock SMALLINT(5),
				price FLOAT
			)";
			$bd->exec($sql);

			// sql to create table customer
			$sql = "CREATE TABLE customer (
				id INT(10) AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(255),
				surname VARCHAR(255),
				email VARCHAR(255) UNIQUE,
				type ENUM('basic','premium')
			)";
			$bd->exec($sql);
		
			// sql to create table borrowed_books
			$sql = "CREATE TABLE borrowed_books (
				customer_id INT(10),
				FOREIGN KEY (customer_id) REFERENCES customer(id),
				book_id INT(10),
				FOREIGN KEY (book_id) REFERENCES book(id),
				start DATETIME,
				end DATETIME
			)";
			$bd->exec($sql);
	
			// sql to create table sale
			$sql = "CREATE TABLE sale (
				id INT(10) AUTO_INCREMENT PRIMARY KEY,
				customer_id INT(10),
				FOREIGN KEY (customer_id) REFERENCES customer(id),
				date DATETIME
			)";
			$bd->exec($sql);

			// sql to create table sale_book
			$sql = "CREATE TABLE sale_book (
				book_id INT(10),
				FOREIGN KEY (book_id) REFERENCES book(id),
				sale_id INT(10),
				FOREIGN KEY (sale_id) REFERENCES sale(id),
				amount SMALLINT(5)
			)";

			$bd->exec($sql);
			echo "Tablas creadas satisfactoriamente<br>";
		} catch(PDOException $e) {
			echo $bd . "<br>" . $e->getMessage();
		}
		$bd = null;
	}
	
	function insertBook($table, $isbn, $title, $author, $stock, $price) {
		try {
			$bd = new PDO(DBNAME, USER, PASSWORD);
			$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$sql =  "INSERT INTO $table (isbn, title, author, stock, price)
					VALUES('$isbn','$title','$author','$stock','$price')";
			$bd->exec($sql);
			echo "Datos de la tabla ". $table ." insertados";
		}	catch(PDOException $e) {
			echo $sql ."<br>". $e->getMessage();
		}
			$bd = null;
	}

	function insertCustomer($table, $firstname, $surname, $email, $type) {
		try {
			$bd = new PDO(DBNAME, USER, PASSWORD);
			$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$sql =  "INSERT INTO $table (firstname, surname, email, type)
					VALUES('$firstname','$surname','$email','$type')";
			$bd->exec($sql);
			echo "Datos de la tabla ". $table ." insertados";
		}	catch(PDOException $e) {
			echo $sql ."<br>". $e->getMessage();
		}
			$bd = null;
	}

	function bdBook($table, $id) {
		$bd = new PDO(DBNAME, USER, PASSWORD);
		$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$sql = doSelectBook($table , $id);
		$result = $bd->query($sql);
		$row = $result->fetch();
		echo "
			<h2>Inserte solo los campos a modificar </h2>
			<h3>tabla ". $table ." con id ". $id ."</h3>
      		<form action='index.php' method='POST'>
	            <input type='text' name='isbn' value='". $row['isbn'] ."' placeholder='". $row['isbn'] ."'><br>
	            <input type='text' name='title' value='". $row['title'] ."' placeholder='". $row['title'] ."'><br>
	            <input type='text' name='author' value='". $row['author'] ."' placeholder='". $row['author'] ."'><br>
	            <input type='text' name='stock' value='". $row['stock'] ."' placeholder='". $row['stock'] ."'><br>
	            <input type='text' name='price' value='". $row['price'] ."' placeholder='". $row['price'] ."'><br><br>
	            <input type='submit' name='button_bdBook' value='Insert'>
            </form>";
        $bd = null;
	}

	function bdCustomer($table, $id) {
		$bd = new PDO(DBNAME, USER, PASSWORD);
		$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$sql = doSelectCustomer($table , $id);
		$result = $bd->query($sql);
		$row = $result->fetch();
		echo "
			<h2>Inserte solo los campos a modificar </h2>
			
  			<form action='index.php' method='POST'>
  			<h3>tabla ". $table ." con id ". $id ."</h3>
                <input type='text' name='firstname' value='". $row['firstname'] ."' placeholder='". $row['firstname'] ."'><br>
                <input type='text' name='surname' value='". $row['surname'] ."' placeholder='". $row['surname'] ."'><br>
                <input type='email' name='email' value='". $row['email'] ."' placeholder='". $row['email'] ."'><br><br>
                 <input type='submit' name='button_bdCustomer' value='Insert'>
            </form>";
         $bd = null;
	}

	function editBook($table, $id, $isbn, $title, $author, $stock, $price) {
		$bd = new PDO(DBNAME, USER, PASSWORD);
		$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      	$sql = "UPDATE $table SET
        			title = '$title',
			        author = '$author',
			        stock = '$stock',
			        price = '$price',
			        isbn = '$isbn'
			    WHERE id = '$id';";
		$bd->exec($sql);
		echo "Modificación ". $table ." Correcta";
		$bd = null;
    }

    function editCustomer($table, $id, $firstname, $surname, $email) {
     	$bd = new PDO(DBNAME, USER, PASSWORD);
		$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$sql = "UPDATE $table SET
				    firstname = '$firstname',
				    surname = '$surname',
				    email = '$email'
				WHERE id = '$id';";
		$bd->exec($sql);
		echo "Modificación ". $table ." Correcta";
		$bd = null;
	}

?>