<?php

require_once 'Book.php';
require_once 'BookList.php';

$book1 = new Book('B1', 'PED Academy', 'Luigi', 50, 22);
$book2 = new Book('B2', 'Fondamenti di PHP', 'Luigi', 355, 40);

$bookList = new BookList();
$bookList->addBook($book1);
$bookList->addBook($book2);
$bookList->addBook($book2);

$bookList->printList();

echo 'Prezzo totale: ' . $bookList->getTotalPrice();

