<?php

require_once 'Book.php';

class BookList
{
    /**
     * @var Book[]
     */
    private $list;

    public function __construct(){
        $list = array();
    }

    public function addBook(Book $newBook)
    {
        $exists = false;
        foreach ($this->list as $book) {
            if ($newBook->getIsbn() == $book->getIsbn()) {
                $exists = true;
            }
        }

        if ($exists === false) {
            $this->list[] = $newBook;
            return true;
        }
    
        return false;
    }

    public function printList()
    {
        echo '<pre>';

        echo str_pad('ISBN', 10) . '| ';
        echo str_pad('Author', 30) . '| ';
        echo str_pad('Title', 30) . '| ';
        echo str_pad('Price (€)', 10) . "\n";

        echo str_pad('', 10, '-') . '| ';
        echo str_pad('', 30, '-') . '| ';
        echo str_pad('', 30, '-') . '| ';
        echo str_pad('', 10, '-') . "\n";

        foreach ($this->list as $book) {
            echo str_pad($book->getIsbn(), 10) . '| ';
            echo str_pad($book->getAuthor(), 30) . '| ';
            echo str_pad($book->getTitle(), 30) . '| ';
            echo str_pad($book->getPrice(), 10) . "\n";
        }
        echo '</pre>';
    }
     
    public function getTotalPrice()
    {
        $totalPrice = 0;

        foreach ($this->list as $book) {
            $totalPrice += $book->getPrice();
        }

        return $totalPrice;
    } 
}