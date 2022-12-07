<?php
class Cast
{
    public $protagonist;
    public $antagonist;

    /**
     * @param String $protagonist
     * @param String $antagonist
     */
    public function __construct($_protagonist = null, $_antagonist = null)
    {
        $this->protagonist = $_protagonist;
        $this->antagonist = $_antagonist;
    }
}
