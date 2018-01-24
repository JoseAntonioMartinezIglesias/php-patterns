<?php

include_once '../../autoload.php';

use Creational\Prototype\BookPrototype\BookPrototypePHP;
use Creational\Prototype\BookPrototype\BookPrototypeSQL;

$phpProto = new BookPrototypePHP();
$sqlProto = new BookPrototypeSQL();

$book1 = clone $sqlProto;
$book1->setTitle("SQL for cats");

print "book 1 theme: " . $book1->getTheme();
print "book 1 title: " . $book1->getTitle();
print "\n";

$book2 = clone $phpProto;
$book2->setTitle("OReilly Learning PHP 5");

print "book 2 theme: " . $book2->getTheme();
print "book 2 title: " . $book2->getTitle();
print "\n";

$book3 = clone $sqlProto;
$book3->setTitle("OReilly Learning SQL");

print "book 3 theme: " . $book3->getTheme();
print "book 3 title: " . $book3->getTitle();

print "\n";

print "End \n";



