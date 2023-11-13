<?php
class it {
    public $maneger;
    public $sentermaneger;
    public $itoffcer;
    public $businessoddicers;
    static public $officersarr;
    public function __construct()
    {
        self::$officersarr = file("student.txt");
    }
    function dhaka($maneger){
        foreach(self::$officersarr as $line){
            $br = explode(",",$line);
            if($br[0] ==$maneger){
                echo $br[0]."<br>";
                echo $br[1]."<br>";
                echo $br[2]."<br>";
                echo $br[3]."<br>";
            }
        }
    }
}
$ot = new it();
$ot->dhaka("1");
?>

