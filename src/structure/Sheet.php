<?php

namespace structure;

final class Sheet implements DataStructureInterface
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
     * @var integer
     */
    private static $size = 0;

    /**
     * @param mixed|null $value
     */
    public function __construct($value = null)
    {
        $this->value = $value;
        ++self::$size;
    }

    /**
     * @param mixed $element
     * @return void
     */
    public function add($element)
    {
        if (is_null($this->value)) {
            $this->value = $element;
        } elseif ($this->tail) {
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
        --self::$size;
    }

    /**
     * @return integer
     */
    public function size()
    {
        return self::$size;
    }

    /**
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }
}
