<?php
/**
 * This file is part of the lenex-php package.
 *
 * The Lenex file format is created by Swimrankings.net
 *
 * (c) Leon Verschuren <lverschuren@hotmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use leonverschuren\Lenex\Reader;

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
