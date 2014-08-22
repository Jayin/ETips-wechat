<?php
namespace libs\framework;
class Logger
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    /**
     * DEBUG
     * @param $message +
     */
    public function d($message)
    {
        $this->write(' [DEBUG] ', $message);
    }

    /**
     * INFO
     * @param $message +
     */
    public function i($message)
    {
        $this->write(' [INFO] ', $message);
    }


    /**
     * NOTICE
     * @param $message
     */
    public function n($message)
    {
        $this->write(' [NOTICE] ', $message);
    }

    /**
     * WARNING
     * @param $message
     */
    public function w($message)
    {
        $this->write(' [WARNING] ', $message);
    }

    /**
     * ERROR
     * @param $message
     */
    public function e($message)
    {
        $this->write(' [ERROR] ', $message);
    }

    private function write($level, $message)
    {
        $file = $this->filename;

        $handle = fopen($file, 'a+');

        fwrite($handle, date('Y-m-d G:i:s') . ' - ' . $level . ':' . print_r($message, true) . "\n");

        fclose($handle);
    }

    public function clean()
    {
        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }
}





