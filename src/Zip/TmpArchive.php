<?php

/**
 * TmpArchive
 *
 * Zip 一時ファイルを作成するクラス
 */
namespace PHPArchive\Zip;

class TmpArchive extends Archive
{

    public function __construct(\ZipArchive $zipArchive, $tmpFilePath = '/tmp')
    {

        $tmpFile = tempnam($tmpFilePath, 'zip');
        parent::__construct($zipArchive, $tmpFile);

        register_shutdown_function(function ($filename)
        {
            unlink($filename);
        }, $tmpFile);
    }
}
