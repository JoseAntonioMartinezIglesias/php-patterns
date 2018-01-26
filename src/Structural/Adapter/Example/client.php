<?php

include_once 'Book.php';
include_once 'BookAdapter.php';

$book = new Book("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
$bookAdapter = new BookAdapter($book);
writeln('Author and Title: ' . $bookAdapter->getAuthorAndTitle());
