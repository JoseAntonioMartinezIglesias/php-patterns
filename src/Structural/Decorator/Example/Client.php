<?php

include_once '../../../autoload.php';

Use Structural\Decorator\BookTitleStarDecorator;
use Structural\Decorator\Book;
use Structural\Decorator\BookTitleDecorator;
use Structural\Decorator\BookTitleExclaimDecorator;


$patternBook = new Book('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');

$decorator = new BookTitleDecorator($patternBook);
$starDecorator = new BookTitleStarDecorator($decorator);
$exclaimDecorator = new BookTitleExclaimDecorator($decorator);

echo $decorator->showTitle() ."\n";
echo $exclaimDecorator->exclaimTitle()."\n";
echo $decorator->showTitle()."\n";
echo $starDecorator->starTitle()."\n";
echo $decorator->resetTitle()."\n";
echo $decorator->showTitle()."\n";

