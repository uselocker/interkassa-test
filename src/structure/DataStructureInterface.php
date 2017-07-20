<?php

namespace structure;

interface DataStructureInterface
{
    /**
     * @param mixed $element
     * @return void
     */
    public function add($element);

    /**
     * @param mixed $element
     * @return boolean
     */
    public function contains($element);

    /**
     * @param mixed $element
     * @return void
     */
    public function delete($element);

    /**
     * @return integer
     */
    public function size();
}