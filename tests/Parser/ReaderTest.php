<?php
/**
 * @author Leon Verschuren <lverschuren@hotmail.com>
 */

use leonverschuren\Lenex\Parser\Reader;

class ReaderTest extends PHPUnit_Framework_TestCase
{
    public function testReadLxf()
    {
        // Arrange
        $target = new Reader();

        // Act
        $result = $target->read(__DIR__.'/test.lxf');

        // Assert
        $this->assertInstanceOf(SimpleXMLElement::class, $result);
    }

    public function testReadLef()
    {
        // Arrange
        $target = new Reader();

        // Act
        $result = $target->read(__DIR__.'/test.lef');

        // Assert
        $this->assertInstanceOf(SimpleXMLElement::class, $result);
    }
}
