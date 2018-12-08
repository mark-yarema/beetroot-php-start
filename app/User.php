<?php


Class User
{
    public $id;
    public $name;
    public $lastnaem;
    public $mobilephone;

    /**
     * @return mixed
     */
    public function chengeName()
    {
        $this->name = 1;
    }

    public function getFullName()
    {
        return $this->name.$this->lastnaem;
    }
}

