<?php

// src/Entity/QuestionInterface.php

namespace App\Entity;

/**
 * QuestionInterface
 */
interface QuestionInterface
{
    /**
     * Return html output for this entity.
     */
    public function render() : string;

    /**
     * Validates the question
     *
     * @return boolean
     */
    public function validate() : bool;
}
