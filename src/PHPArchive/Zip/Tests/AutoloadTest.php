<?php

namespace PHPArchive\Zip\Tests;

class AutoloadTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function exists_PHPArchive_Zip_Archive()
    {

        $this->assertTrue(class_exists('\PHPArchive\Zip\Archive'));
    }

    /**
     * @test
     */
    public function exists_PHPArchive_Zip_TmpArchive()
    {

        $this->assertTrue(class_exists('\PHPArchive\Zip\TmpArchive'));
    }

    /**
     * @test
     */
    public function exists_PHPArchive_Zip_Exception()
    {

        $this->assertTrue(class_exists('\PHPArchive\Zip\Exception'));
    }
}
