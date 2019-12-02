<?php

require_once 'Book.php';

$book1 = new Book('B1', 'PED Academy', 'Luigi', 50, 22);
echo "Il libro {$book1->getTitle()} costa: {$book1->getPrice()}€<br>";

$book2 = new Book('B2', 'Fondamenti di PHP', 'Luigi', 355, 40);
echo "Il libro {$book2->getTitle()} costa: {$book2->getPrice()}€<br>";