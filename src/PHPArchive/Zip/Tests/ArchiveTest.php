<?php

namespace PHPArchive\Zip\Tests;

class ArchiveTest extends \PHPUnit_Framework_TestCase
{

    private $vfsRoot;

    private $vfsPath;

    protected function setUp()
    {

        $this->vfsRoot = \org\bovigo\vfs\vfsStream::setup();
        $this->vfsPath = \org\bovigo\vfs\vfsStream::url($this->vfsRoot->getName());
    }

    /**
     * @test
     */
    public function addFileTest()
    {

        $zipFileName = 'hoge.zip';
        $this->vfsRoot->addChild(\org\bovigo\vfs\vfsStream::newFile($zipFileName));
        $archive = new \PHPArchive\Zip\Archive(new ZipArchiveMock(), $this->getVfsFilePath($zipFileName));

        $addingFileName = 'fuga.txt';
        $this->vfsRoot->addChild(\org\bovigo\vfs\vfsStream::newFile($addingFileName));
        $archive->addFile($this->getVfsFilePath($addingFileName));
    }

    private function getVfsFilePath($filename)
    {

        return sprintf("%s%s%s", $this->vfsPath, DIRECTORY_SEPARATOR, $filename);
    }
}
