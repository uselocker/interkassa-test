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
    private static $sheet;

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass()
    {
        self::$sheet = new Sheet();

        self::$sheet->add(1);
        self::$sheet->add(2);
        self::$sheet->add(3);
        self::$sheet->add(4);
    }

    /**
     * {@inheritdoc}
     */
    public static function setUpAfterClass()
    {
        self::$sheet = null;
    }

    public function testAdd()
    {
        $element = 'test1Add';
        self::$sheet->add($element);
        $this->assertTrue(self::$sheet->contains($element));
    }

    public function testContains()
    {
        $this->assertTrue(self::$sheet->contains(3));
        $this->assertFalse(self::$sheet->contains(333));
    }

    /**
     * @depends testAdd
     */
    public function testSize()
    {
        $this->assertTrue(self::$sheet->size() === 5);
        $this->assertFalse(self::$sheet->size() === 10);
    }

    public function testDelete()
    {
        // todo after delete implementation
        $this->assertTrue(true);
    }
}
