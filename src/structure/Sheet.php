<?php

namespace structure;

class Sheet implements DataStructureInterface
{
    /**
     * @var Sheet
     */
    private $tail;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @param mixed|null $value
     */
    public function __construct($value = null)
    {
        $this->value = $value;
    }

    /**
     * @param mixed $element
     * @return void
     */
    public function add($element)
    {
        if ($this->tail) {
            $this->tail->add($element);
        } else {
            $this->tail = new Sheet($element);
        }
    }

    /**
     * @param mixed $element
     * @return boolean
     */
    public function contains($element)
    {
        if (!is_null($this->value) && $element === $this->value) {
            return true;
        }

        if ($this->tail) {
            return $this->tail->contains($element);
        }

        return false;
    }

    /**
     * @param mixed $element
     * @return void
     */
    public function delete($element)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @return integer
     */
    public function size()
    {
        if ($this->tail) {
            $size = $this->tail->size()+1;
        } else {
            $size = 0;
        }

        return $size;
    }

    /**
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }
}