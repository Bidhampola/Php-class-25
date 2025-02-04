<?php
require 'static/Book.php';
$obj = new Books('Adult');

var_dump($obj->$author);
var_dump(Books::$author); //scope resolution operator- used while accesss static properties and static functions

//getting static function
var_dump(Books::getBookName());
