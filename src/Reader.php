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

namespace leonverschuren\Lenex;

use Exception;
use ZipArchive;

class Reader
{
    public function read($path, $mimeType = null)
    {
        if (!is_file($path)) {
            throw new Exception('File cannot be found');
        }

        if (!isset($mimeType)) {
            $mimeType = $this->guessMimeType($path);
        }

        return $this->readByMimeType($path, $mimeType);
    }


    protected function guessMimeType($path)
    {
        return mime_content_type($path);
    }


    protected function readByMimeType($path, $mimeType)
    {
        switch ($mimeType) {
            case 'application/zip':
                return $this->readFromArchive($path);
            case 'text/xml':
                return simplexml_load_file($path);
            case 'application/xml':
                return simplexml_load_file($path);
            default:
                throw new Exception('The mime type "'.$mimeType.'" is not supported');
        }
    }


    protected function readFromArchive($path)
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
