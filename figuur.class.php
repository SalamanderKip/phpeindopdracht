<?php


abstract class figuur
{
    public static $pi = 3.1415;
    protected $x;
    protected $y;


    public function __construct($Ix, $Iy)
    {
        $this->setX($Ix);
        $this->setY($Iy);
    }

    /**
     * @param mixed $Ix
     */
    public function setX($Ix)
    {
        if (!is_int($Ix)) {
            die("dat is geen getal");
        }
        $this->x = $Ix;
    }


    /**
     * @param mixed $Iy
     */
    public function setY($Iy)
    {
        if (!is_int($Iy)) {
            die("dat is geen getal");
        }
        $this->y = $Iy;
    }

    public abstract function berekenOppervlakte ();
}
