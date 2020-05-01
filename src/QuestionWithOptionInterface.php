<?php
// src/QuestionWithOptionInterface.php
namespace App;

use Doctrine\Common\Collections\Collection;
use App\Entity\QuestionOption;

/**
 * Interface for question with options.
 */
interface QuestionWithOptionInterface
{
    /**
     * Return list of options for a question.
     *
     * @return Collection
     */
    public function getOptions(): Collection;

    /**
     * Add more options to a question.
     *
     * @param QuestionOption $option
     *
     * @return self
     */
    public function pushOption(QuestionOption $option): self;
}
