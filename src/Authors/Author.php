<?php
namespace Lcobucci\Library\Authors;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;
use Lcobucci\Library\Email;

/**
 * @ORM\Entity
 * @ORM\Table("author")
 *
 * @author Luís Otávio Cobucci Oblonczyk <luis@darwinsoft.com.br>
 */
class Author implements JsonSerializable
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
    private $name;

    /**
     * @ORM\Embedded(class="Lcobucci\Library\Email")
     *
     * @var string
     */
    private $email;

    /**
     * @param Email $email
     */
    public function __construct(Email $email)
    {
        $this->email = $email;
    }

	/**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

	/**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

	/**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * @return Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email
        ];
    }
}
