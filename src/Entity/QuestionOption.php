<?php

// src/Entity/QuestionOption.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionOptionRepository")
 */
class QuestionOption
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Question", inversedBy="options")
     */
    protected $question;

    /**
     * @ORM\Column
     */
    protected $title;

    /**
     * @ORM\Column
     */
    protected $description;

    /**
     * @ORM\Column(type="boolean", name="is_correct")
     */
    protected $isCorrect;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Get the value of id.
     *
     * @return int.
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Get the value of isCorrect
     *
     * @return bool
     */
    public function getIsCorrect() : bool
    {
        return $this->isCorrect;
    }

    /**
     * Set the value of isCorrect
     * @param bool $isCorrect
     *
     * @return  self
     */
    public function setIsCorrect(bool $isCorrect) : self
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     * @param string $title
     *
     * @return  self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of question
     *
     * @return Question
     */
    public function getQuestion() : Question
    {
        return $this->question;
    }

    /**
     * Set the value of question
     *
     * @param Question $question
     *
     * @return  self
     */
    public function setQuestion(Question $question) : self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
