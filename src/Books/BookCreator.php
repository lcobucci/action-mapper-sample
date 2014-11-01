<?php
namespace Lcobucci\Library\Books;

use Lcobucci\Library\Authors\Author;

/**
 * @author Luís Otávio Cobucci Oblonczyk <luis@darwinsoft.com.br>
 */
interface BookCreator
{
    public function create($title, Author $author, $year);
}
