<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;

    function set_name($name){
        $this->name = $name;
        return $name;
    }
    function set_color($color){
        $this->coloer = $color;
        return $color;
    }
    function set_weight($weight){
        $this->weight = $weight;
        return $weight;
    }
}
$mango = new Fruit();
echo $mango->set_name("Banana" );
echo $mango->set_color(" yellow");
echo $mango->set_name(" 2 Sisir");

?>