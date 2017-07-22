<?php

namespace structure;

use PHPUnit\Framework\TestCase;

/**
 * @covers Sheet
 */
final class SheetTest extends TestCase
{
    /**
     * @var Sheet
     */
    private $sheet;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->sheet = new Sheet();

        $this->sheet->add(1);
        $this->sheet->add(2);
        $this->sheet->add(3);
        $this->sheet->add(4);
        $this->sheet->add('string');
    }

    public function testAdd()
    {
        $element = 'test1Add';
        $this->sheet->add($element);
        $this->assertTrue($this->sheet->contains($element));
    }

    public function testContains()
    {
        $this->assertTrue($this->sheet->contains(3));
        $this->assertFalse($this->sheet->contains(333));
    }

    public function testDelete()
    {
        // todo after delete implementation
        $this->assertTrue(true);
    }

    public function testSize()
    {
        $this->assertTrue($this->sheet->size() === 5);
        $this->assertFalse($this->sheet->size() === 10);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        $this->sheet = null;
    }
}