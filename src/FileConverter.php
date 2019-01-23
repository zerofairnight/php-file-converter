<?php

namespace FileConverter;

class FileConverter
{
    /**
     * The file to convert.
     *
     * @var mixed
     */
    protected $file;

    /**
     * Create a new FileConverter instance.
     *
     * @param mixed $file The file to convert.
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function parse() // analyze?
    {
        // parse the file
    }

    public function availableFormats()
    {
        // get the available file formats output
    }
}
