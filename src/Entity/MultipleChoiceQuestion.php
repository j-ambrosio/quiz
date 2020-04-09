<?php

// src/Entity/MultipleChoiceQuestion.php

namespace App\Entity;

/**
 * MultipleChoiceQuestion.php.
 */
class MultipleChoiceQuestion extends Question
{
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\QuestionOption", mappedBy="question")
     */
    private $options;

    /**
     * Get Options
     *
     * @return QuestionOption
     */
    public function getOptions(): QuestionOption
    {
        return $this->options;
    }

    /**
     * Add option to a question
     * @param QuestionOption $option
     *
     * @return self
     */
    public function pushOption(QuestionOption $option): self
    {
        $this->options[] = $option;

        return $this;
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
