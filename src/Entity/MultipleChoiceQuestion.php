<?php

// src/Entity/MultipleChoiceQuestion.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Implementation of Question with multiple choice
 */
class MultipleChoiceQuestion extends Question
{
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\QuestionOption", mappedBy="question")
     */
    private $options;

    /**
     * MultipleChoiceQuestion constructor
     */
    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    /**
     * @return Collection|QuestionOptioin[]
     */
    public function getOptions(): Collection
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
        $this->options->add($option);

        return $this;
    }
}
