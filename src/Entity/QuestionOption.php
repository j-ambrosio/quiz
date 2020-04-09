<?php

// src/Entity/QuestionOption.php

namespace App\Entity;

/**
 * One option for an existing Question.
 */
class QuestionOption
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var bool
     */
    protected $isCorrect;

    /**
     * @var int
     */
    private $id;
}