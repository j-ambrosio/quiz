<?php

// src/Entity/MultipleChoiceQuestion.php

namespace App\Entity;

use App\HasOptionTrait;
use App\QuestionWithOptionInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Implementation of Question with multiple choice
 */
class MultipleChoiceQuestion extends Question implements QuestionWithOptionInterface
{
    use HasOptionTrait;

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
}
