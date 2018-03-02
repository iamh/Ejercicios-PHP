<?php

    function doSelectBook($table, $id){
        return "SELECT isbn, title, author, stock, price FROM $table where id = $id";
    }

    function doSelectCustomer($table, $id){
         return "Select firstname, surname, email FROM $table where id = $id";
    }
  
?>