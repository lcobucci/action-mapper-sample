<?php
namespace Lcobucci\Library\Books;

/**
 * @author Luís Otávio Cobucci Oblonczyk <luis@darwinsoft.com.br>
 */
interface BookRepository
{
    /**
     * @param int $id
     *
     * @return Book
     */
    public function find($id);

    /**
     * @return Book[]
     */
    public function findAll();

    /**
     * @param Book $book
     */
    public function persist(Book $book);
}
