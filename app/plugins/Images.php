<?php

class Images
{
    private $dir = '/public/img/product/';

    private $file;

    public function __construct($file)
	{
		$this->file = $file;

    }
    
    public function save()
    {
       return $this->file->moveTo($_SERVER['DOCUMENT_ROOT'] . $this->getLink());
    }

    public function getLink()
    {
        return $this->dir . $this->file->getName();
        
    }

    public static function delete($link)
    {
        $link = $_SERVER['DOCUMENT_ROOT'] . $link;

        return unlink("$link");
    }
}