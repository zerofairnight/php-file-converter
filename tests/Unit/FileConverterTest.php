<?php

namespace FileConverter\Tests\Unit;

use FileConverter\Tests\TestCase;

class FileConverterTest extends TestCase
{
    public function test_detect_webm_mime()
    {
        $filename = __DIR__.'/../files/big-buck-bunny_trailer.webm';

        $convert = $this->convert($filename);

        $this->assertEquals($convert->mimeType(), 'video/webm');
        $this->assertContains('video/mp4', $convert->availableFormats());
    }
}
