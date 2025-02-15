<?php

trait Year
{
    public function getYear(){
        return "Current year is 2025";
    }
}

class Pen
{
    use Year;
    public static $name = 'Bic';
    public static $amount = 400;

    public static function getName(){
        $name = self::$name;
        return "The pen name is $name";
    }
}

var_dump(Pen::getName());// calling static method from a call called Pen
echo "<br>";
var_dump(Pen::$name);
echo "<br>";
var_dump((new Pen)->getYear());
echo "<br>";


//constructor and constructor promotion
class Constor
{
    use Year;
    public $address;
    private $amount;
    public $name;

    public function __construct($address, $name,$amount)
    {
        $this->address = $address;
        $this->name = $name;
        $this->amount = $amount;
    }

}

$obj = new Constor('Namutumba','Brian',900);
var_dump($obj);
echo "<br>";
var_dump($obj->getYear());
