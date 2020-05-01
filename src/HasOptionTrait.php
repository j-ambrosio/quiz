<?php

// src/HasOptionTrait.php

namespace App;

use Doctrine\Common\Collections\Collection;
use App\Entity\QuestionOption;

/**
 * Trait used to add option fields and behavior.
 *
 * Using this trait makes required to implement a property "options".
 * This property must relate to question relationship and be initiated in the constructor.
 */
trait HasOptionTrait
{
    /**
     * @return Collection|QuestionOption[]
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
