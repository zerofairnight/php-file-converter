<?php

namespace FileConverter;

class MimeType
{
    /**
     * Guess the mime type of the given file.
     *
     * @param string $path The path to the file.
     * @return string The mime type, null if none could be guessed
     *
     * @throws Exception The file does not exists
     * @throws Exception The file could not be accessed
     * @throws Exception Unable to guess the mime type
     */
    public function guess($path)
    {
        if (! is_file($path)) {
            throw new \Exception(sprintf('The file "%s" does not exist', $path));
        }

        if (! is_readable($path)) {
            throw new \Exception(sprintf('The file "%s" could not be accessed', $path));
        }

        if (! \function_exists('finfo_open')) {
            throw new \Exception('Unable to guess the mime type (finfo_open is missing)');
        }

        // note that null is the path of the magic database file
        if (! $finfo = new \finfo(FILEINFO_MIME_TYPE, null)) {
            return;
        }

        return $finfo->file($path);
    }
}
