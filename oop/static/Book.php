<?php

class Books{
    public static $author  = 'Brian' ;
    public static $name = 'Flying Bird';
    public $type = 'Horror';

    public function __construct($type)
    {
        $this->type = $type;
    }

    public static function getBookName(){
       // return self->$type;//wrong static methods uses static prpties
        return self::$name;//this right
    }
}