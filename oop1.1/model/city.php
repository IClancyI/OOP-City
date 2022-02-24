<?php

class City{
    //velden
    private $img_id;

    private $img_filename;

    private $img_title;

    private $img_width;

    private $img_height;

    public function __construct($img_filename){
        $this->img_filename = $img_filename;
    }

    //getters and setters

    /**
     * @return int
     */
    public function getImgId()
    {
        return $this->img_id;
    }

    /**
     * @param int $img_id
     */
    public function setImgId($img_id): void
    {
        $this->img_id = $img_id;
    }

    /**
     * @return string
     */
    public function getImgFilename()
    {
        return $this->img_filename;
    }

    /**
     * @param string $img_filename
     */
    public function setImgFilename($img_filename): void
    {
        $this->img_filename = $img_filename;
    }

    /**
     * @return string
     */
    public function getImgTitle()
    {
        return strtoupper($this->img_title);
    }

    /**
     * @param string $img_title
     */
    public function setImgTitle($img_title): void
    {
        $this->img_title = $img_title;
    }

    /**
     * @return int
     */
    public function getImgWidth()
    {
        return $this->img_width;
    }

    /**
     * @param int $img_width
     */
    public function setImgWidth($img_width): void
    {
        $this->img_width = $img_width;
    }

    /**
     * @return int
     */
    public function getImgHeight()
    {
        return $this->img_height;
    }

    /**
     * @param int $img_height
     */
    public function setImgHeight($img_height): void
    {
        $this->img_height = $img_height;
    }


}