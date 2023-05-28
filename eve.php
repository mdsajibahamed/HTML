<?php
class student {
    public $nid;
    public $uname;
    public $dr;
    public $uz;
    static public $studentarr;
    public function __construct()
    {
        self::$studentarr = file("student.txt");
    }
    function upazila($nid){
        foreach(self::$studentarr as $line){
            $brack = explode(",",$line);
        if($brack[0]==$nid){
            echo $brack[0]."<br>";
            echo $brack[1]."<br>";
            echo $brack[2]."<br>";
            echo $brack[3]."<br>";
        }

        }
    }
}
$new = new student ();
$new->upazila("1");

?>