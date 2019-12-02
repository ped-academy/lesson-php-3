<?php

class Book
{
    const PRICE_PER_PAGE = 0.02;

    private $isbn;
    private $title;
    private $author;
    private $pageNumber;
    private $authorPrice;

    public function __construct($isbn, $title, $author, $pageNumber, $authorPrice)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->pageNumber = $pageNumber;
        $this->authorPrice = $authorPrice;
    }

    public function getPrice()
    {
        return $this->authorPrice + $this->pageNumber * Book::PRICE_PER_PAGE;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getAuthorPrice()
    {
        return $this->authorPrice;
    }

    public function setAuthorPrice($authorPrice)
    {
        $this->authorPrice = $authorPrice;
    }
}
