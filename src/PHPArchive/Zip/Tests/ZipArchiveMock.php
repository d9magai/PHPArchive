<?php

namespace PHPArchive\Zip\Tests;

class ZipArchiveMock extends \ZipArchive
{

    public function addFile($filename)
    {

        return true;
    }
}
