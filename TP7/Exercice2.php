<?php

/*abstract class*/ interface Shape{
    function getArea() ;
}

/*abstract*/ class Square /*extend*/ implements Shape {

    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function getArea(){

            return $this->width * $this->height;

    }
}

/*abstract*/ class Circle /*extend*/ implements Shape{

    private $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function getArea()
    {
        return 2*M_PI*$this->radius;
    }

}

$objetSquare = new Square(5,5);
$objetCircle = new Circle(5);
$tab = [$objetCircle,$objetSquare];
for ($i = 0; sizeof($tab); $i++){
    get_class($i);
    $tab[$i]->getArea();
}



?>