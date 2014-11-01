<?php
namespace Lcobucci\Library;

use Doctrine\ORM\Mapping as ORM;
use InvalidArgumentException;
use JsonSerializable;

/**
 * @author Luís Otávio Cobucci Oblonczyk <luis@darwinsoft.com.br>
 * @since 0.1.0
 *
 * @ORM\Embeddable
 */
class Email implements JsonSerializable
{
    /**
     * The client email
     *
     * @ORM\Column(type="string", length=200)
     *
     * @var string
     */
    private $address;

    /**
     * @param string $address
     */
    public function __construct($address)
    {
        $this->setAddress($address);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Configures the email address
     *
     * @param string $address
     *
     * @throws InvalidArgumentException When email is empty or is invalid
     */
    protected function setAddress($address)
    {
        if (filter_var($address, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException('Email must be a valid email address');
        }

        $this->address = $address;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return $this->address;
    }
}
