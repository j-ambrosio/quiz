<?php

// src/Entity/Question.php

namespace App\Entity;

/**
 * Default question entity.
 */
class Question implements QuestionInterface
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $sentence;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var int
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
}
