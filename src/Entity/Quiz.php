<?php

// src/Entity/Quiz.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuizRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Quiz
{
    use TimestampableEntity;

    /**
     * @ORM\Column(type="string")
     */
    protected $status;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $isOpen;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Question", mappedBy="quiz")
     */
    protected $questions;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Quiz constructor
     */
    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    /**
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    /**
     * Add new question to Quiz
     * @param Question $question
     *
     * @return self
     */
    public function addQuestion(Question $question) : self
    {
        $this->questions->add($question);

        return $this;
    }

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
