<?php
abstract class shape{
    const unit="cm<sup>2</sup>";
    abstract public function area();
}


class rectangle extends shape{
    private $width;
    private $height;

public function __construct($width,$height){
    $this->width=$width;
    $this->height=$height;
}
public function area(){
    return  "area of rectangle: " . $this->width * $this->height . " " . self::unit;
} 


}
class circle extends shape{
    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }


    public function area(){
        return " area of circle: " . PI() * pow($this->radius,2) . " " . self::unit;
    }
}

 $rectangle = new rectangle(10,20);
 echo $rectangle->area();

 echo "<br>";
 $circle=new circle(10);
 echo $circle->area();