<?php

include_once 'Book.php';

class BookAdapter {

    private $book;

    function __construct(Book $book_in) {
        $this->book = $book_in;
    }

    function getAuthorAndTitle() {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }

}
