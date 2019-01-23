# PHP File Converter

A generic file converter for PHP (WIP)

> Plans for the generic interface

```php
use FileConverter\FileConverter;

// prepare the file to be converted
$converter = new FileConverter($file);

// convert the file using the default settings
$converter->convert('video/mp4');
// or
$converter->convert('mp4');

// convert the file using custom settings
$converter->convert('video/mp4', [
    'scale' => '500:340',
    'mute' => true
]);
```

Working on the settings could be cumbersome, however an implementation for a future more abstract interface should be easier
