# lenex-php

![](https://github.com/leonverschuren/lenex-php/workflows/CI/badge.svg)

This library is a PHP5 implementation of the Lenex file format. The format is commonly used in swimmeets and developed by [Swimrankings](https://www.swimrankings.net/).
The library is able to read an uncompressed `.lef` file or a compressed `.lxf` file and transform it into objects.

The implementation in this library is based on Lenex version 3.0.

## Usage
```php
//namespace leonverschuren\Lenex\Parser;

$reader = new Reader();
$parser = new Parser();
$result = $parser->parseResult($reader->read(PATH_TO_FILE));
```
