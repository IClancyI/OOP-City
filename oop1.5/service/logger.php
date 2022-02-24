<?php

class logger
{
    //velden
    private $fp;

    private $logfile;

    //getters and setters
    /**
     * @return mixed
     */
    public function getFp()
    {
        return $this->fp;
    }

    /**
     * @param mixed $fp
     */
    public function setFp($fp): void
    {
        $this->fp = $fp;
    }

    /**
     * @return mixed
     */
    public function getLogfile()
    {
        return $this->logfile;
    }

    /**
     * @param mixed $logfile
     */
    public function setLogfile($logfile): void
    {
        $this->logfile = $logfile;
    }

    //methodes
    public function __construct($fp)
    {
        fopen("../log/log.txt");
    }

    public function Log($msg)
    {
        nl2br(fwrite("../log/log.txt",date().$msg)."\r\n");
    }

    public function ShowLog()
    {
        return file_get_contents('../log/log.txt');
    }

}