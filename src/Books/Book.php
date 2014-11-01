<?php
namespace Lcobucci\Library\Books;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;
use Lcobucci\Library\Authors\Author;

/**
 * @ORM\Entity(repositoryClass="Lcobucci\Library\Books\BookRepository\Doctrine")
 * @ORM\Table("book")
 *
 * @author Luís Otávio Cobucci Oblonczyk <luis@darwinsoft.com.br>
 */
class Book implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="Lcobucci\Library\Authors\Author")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id", nullable=false)
     *
     * @var Author
     */
    private $author;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $year;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTime
     */
    private $createdAt;

    /**
     * @param string $title
     * @param Author $author
     * @param int $year
     */
    public function __construct($title, Author $author, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    /**
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return number
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->getAuthor(),
        ];
    }
}
