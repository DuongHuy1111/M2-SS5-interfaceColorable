<?php
include 'Colorable.php';
class Square1 implements Colorable
{
    private $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    function caculateArea()
    {
        return pow($this->width, 2);
    }

    function howToColor()
    {
        echo "Color all four sides!";
    }
}

?>