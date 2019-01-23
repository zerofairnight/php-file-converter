<?php

namespace FileConverter\Tests;

use FileConverter\FileConverter;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Create a new file converter instance from the specified file.
     *
     * @param mixed $file
     * @return \FileConverter\FileConverter
     */
    protected function convert($file)
    {
        return new FileConverter($file);
    }
}
