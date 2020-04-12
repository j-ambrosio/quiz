<?php

// src/Entity/Question.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question implements QuestionInterface
{
    /**
     * @ORM\Column
     */
    protected $type;

    /**
     * @ORM\Column
     */
    protected $sentence;

    /**
     * @ORM\Column
     */
    protected $title;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Quiz", inversedBy="questions")
     */
    protected $quiz;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Get the value of id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of sentence.
     *
     * @return string
     */
    public function getSentence()
    {
        return $this->sentence;
    }

    /**
     * Set the value of sentence.
     * @param string $sentence
     *
     * @return self
     */
    public function setSentence(string $sentence)
    {
        $this->sentence = $sentence;

        return $this;
    }

    /**
     * Get the value of title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title.
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type.
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the quiz
     *
     * @return Quiz
     */
    public function getQuiz() : Quiz
    {
        return $this->quiz;
    }

    /**
     * @inheritDoc
     */
    public function render() : string
    {
        // @todo Add html return
        return '<span></span>';
    }

    /**
     * @inheritDoc
     */
    public function validate() : bool
    {
        return true;
    }
}
