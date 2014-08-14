<?php

namespace PHPArchive\Zip;

class AutoloadTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function PHPArchive_Zip_Archiveクラス()
    {

        $this->assertTrue(class_exists('\PHPArchive\Zip\Archive'));
    }

    /**
     * @test
     */
    public function PHPArchive_Zip_TmpArchiveクラス()
    {

        $this->assertTrue(class_exists('\PHPArchive\Zip\TmpArchive'));
    }

    /**
    * @test
     */
    public function PHPArchive_Zip_Exceptionクラス()
    {

        $this->assertTrue(class_exists('\PHPArchive\Zip\Exception'));
    }
}
