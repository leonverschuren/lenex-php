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

namespace leonverschuren\Lenex\Parser;

use Exception;
use ZipArchive;

class Reader
{
    public function read($path)
    {
        if (file_exists($path)) {
            $extension = pathinfo($path, PATHINFO_EXTENSION);

            switch ($extension) {
                case 'lxf':
                    return $this->readFromArchive($path);
                case 'lef':
                    return simplexml_load_file($path);
                case 'xml':
                    return simplexml_load_file($path);
                default:
                    throw new Exception('The extension "'. $extension .'" is not supported');
            }
        }

        throw new Exception('File cannot be found');
    }

    private function readFromArchive($path)
    {
        $zip = new ZipArchive;

        if ($zip->open($path) === true) {
            $lef = $zip->getFromIndex(0);
            $zip->close();

            return simplexml_load_string($lef);
        }

        throw new Exception('Failed to open lxf archive');
    }
}
