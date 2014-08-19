# PHPArchive

Wrapper of ZipArchive class.

## API Example

```php
use D9magai\Zip\TmpArchive;

// create TmpArchive
$tmpArchive = TmpArchive(new \ZipArchive(), __DIR__ . '/tmp');
// add file to tmpArchive
$tmpArchive->addFile($filePath);
// saving tmpArchive
$tmpArchive->save();
// get tmpArchive path
$zipPath = $tmpArchive->getPath();
```


##License

This project is licensed under the [MIT license](http://opensource.org/licenses/MIT).
