<?php
	include('./config/config.php');
	function createTable() {
			try {

				$bd=new PDO(DBNAME,USER,PASSWORD);
				$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

				//sql to create book
				$sql = "CREATE TABLE book (
					id INT(10) AUTO_INCREMENT PRIMARY KEY,
					isbn VARCHAR(13),
					title VARCHAR(255),
					author VARCHAR(255),
					stock SMALLINT(5),
					price FLOAT
				)";
				// use exec() because no results are returned
				$bd->exec($sql);
				echo "book creada satisfactoriamente<br>";

				// sql to create table customer
				$sql = "CREATE TABLE customer (
					id INT(10) AUTO_INCREMENT PRIMARY KEY,
					firstname VARCHAR(255),
					surname VARCHAR(255),
					email VARCHAR(255),
					type ENUM('basic','premium')
				)";
				// use exec() because no results are returned
				$bd->exec($sql);
				echo "customer creada satisfactoriamente<br>";
		
				// sql to create table borrowed_books
				$sql = "CREATE TABLE borrowed_books (
					customer_id INT(10),
					FOREIGN KEY (customer_id) REFERENCES customer(id),
					book_id INT(10),
					FOREIGN KEY (book_id) REFERENCES book(id),
					start DATETIME,
					end DATETIME
				)";
				// use exec() because no results are returned
				$bd->exec($sql);
				echo "borrowed_books creada satisfactoriamente<br>";
		
				// sql to create table sale
				$sql = "CREATE TABLE sale (
					id INT(10) AUTO_INCREMENT PRIMARY KEY,
					customer_id INT(10),
					FOREIGN KEY (customer_id) REFERENCES customer(id),
					date DATETIME
				)";
				// use exec() because no results are returned
				$bd->exec($sql);
				echo "sale creada satisfactoriamente<br>";
				//////////////////////////////////////////////////
				// sql to create table sale_book
				$sql = "CREATE TABLE sale_book (
					book_id INT(10),
					FOREIGN KEY (book_id) REFERENCES book(id),
					sale_id INT(10),
					FOREIGN KEY (sale_id) REFERENCES sale(id),
					amount SMALLINT(5)
				)";
				// use exec() because no results are returned
				$bd->exec($sql);
				echo "sale_book creada satisfactoriamente<br>";
				//////////////////////////////////////////////////

			} catch(PDOException $e) {
				echo $bd . "<br>" . $e->getMessage();
			}

			$bd = null;
		}
?>