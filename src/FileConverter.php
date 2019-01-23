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
     * The cached mime type of the file.
     *
     * @var string
     */
    protected $mimeType = false;

    /**
     * Create a new FileConverter instance.
     *
     * @param mixed $file The file to convert.
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Guess the mime type of the file based on its content.
     *
     * @return void
     */
    public function mimeType()
    {
        if ($this->mimeType === false) {
            $this->mimeType = (new MimeType)->guess($this->file);
        }

        return $this->mimeType;
    }

    /**
     * Return the available formats in mime types for this file.
     *
     * @return array
     */
    public function availableFormats()
    {
        // TODO: fix me pls
        $table = include 'conversion_table.php';

        return $table[$this->mimeType()];
    }

    public function parse() // analyze?
    {
        // parse the file
    }
}
