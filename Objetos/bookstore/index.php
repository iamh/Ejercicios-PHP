<?php
	require_once __DIR__."/customer.php";
	require_once __DIR__."/book.php";

	$cliente1 = new customer("123", "Pedro", "hola@gmail.com");
	$cliente2 = new customer("12355", "Jose", "holasss@gmail.com");
	$cliente3 = new customer("123", "Peter", "holassd@gmail.com");
	
	$book1 = new book("Perdido", "Juan Perez");
	$book2 = new book("Perdidsss", "Juan Perez Rosa");
	$book3 = new book("Lost", "Juan Donoso");
	
	echo "Cliente 1: ". $cliente1 . "<br>" . $book1;
	echo "<br><br>";
	echo "Cliente 2: ". $cliente2 . "<br>" . $book2;
	echo "<br><br>";
	echo "Cliente 3: ". $cliente3 . "<br>" . $book3;
?>
	