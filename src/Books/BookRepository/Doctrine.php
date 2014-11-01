<?php
namespace Lcobucci\Library\Books\BookRepository;

use Doctrine\ORM\EntityRepository;
use Lcobucci\Library\Books\Book;
use Lcobucci\Library\Books\BookRepository;

class Doctrine extends EntityRepository implements BookRepository
{
    /**
     * {@inheritdoc}
     */
    public function persist(Book $book)
    {
        $em = $this->getEntityManager();

        $em->persist($book);
        $em->flush();
    }
}
