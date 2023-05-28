<?php
class student {
    public $id ;
    public $name;
    public $batch;
    public $sir;
    static public $filearr;
     public function __construct(){
        self::$filearr = file("arr.txt");
    }
    function result($id){
    foreach(self::$filearr as $line){
        $parts =explode(",",$line);
        if($parts[0]==$id){
            echo $parts[0];
            echo $parts[1];
            echo $parts[2];
            echo $parts[3];
           
        }
    }
} 

}
$ob = new student();
$ob->result("4");
?>

<hr>
