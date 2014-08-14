<?php

/**
 * ZipArchive
 *
 * \ZipArchiveのラッパークラス
 */
namespace Zip;

class Archive
{

    /**
     *
     * @var ZipArchive
     */
    protected $zipArchive;

    /**
     * サーバ側でのzip保存先ファイル名
     *
     * @var string
     */
    protected $path;

    public function __construct(\ZipArchive $zipArchive, $path)
    {

        $this->zipArchive = $zipArchive;
        $this->path = $path;
        $this->open();
    }

    /**
     * zipファイルを作成する
     *
     * @throws PHPArchive\Exception
     */
    protected function open()
    {
        // $retには成功時にtrue,失敗時にエラーコードがセットされる
        $ret = $this->zipArchive->open($this->path, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        if ($ret !== true) {
            throw new Exception('Zipファイルの作成に失敗しました', $ret);
        }
    }

    /**
     * ファイル追加
     *
     * @param string $file ファイルパス
     * @throws PHPArchive\Exception
     */
    public function addFile($file)
    {

        if (! file_exists($file)) {
            throw new Exception('ファイル ' . $file . ' が存在しません');
        }
        $filename = basename($file);

        $ret = $this->zipArchive->addFile($file, $filename);
        if ($ret !== true) {
            throw new Exception('ファイルの追加に失敗しました');
        }
    }

    /**
     * ファイル追加(メモリ上から)
     *
     * @param string $binary 追加するファイルの内容
     * @param string $filename zip 内でのファイル名
     * @throws PHPArchive\Exception
     */
    public function addString($filename, $binary)
    {

        $ret = $this->zipArchive->addFromString($filename, $binary);
        if ($ret !== true) {
            throw new Exception('ファイルの追加に失敗しました');
        }
    }

    /**
     * Zipファイルのパスを返す
     *
     * @return string
     */
    public function getPath()
    {

        return $this->path;
    }

    /**
     * zip ファイル保存
     *
     * @throws PHPArchive\Exception
     */
    public function save()
    {

        $ret = $this->zipArchive->close();
        if ($ret !== true) {
            throw new Exception('ファイルの保存に失敗しました');
        }
    }
}
