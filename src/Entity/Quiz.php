<?php

// src/Entity/Quiz.php

namespace App\Entity;

use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\HasLifecycleCallbacks
 */
class Quiz
{
    use TimestampableEntity;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $isOpen;

    /**
     * @var int
     */
    private $id;

    /**
     * Get the value of status
     *
     * @return  string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of isOpen
     *
     * @return int
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }

    /**
     * Set the value of isOpen
     *
     * @param int $isOpen
     *
     * @return self
     */
    public function setIsOpen(int $isOpen)
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
