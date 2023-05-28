<?php
$name = array(" bangladesh" => "dhaka","pakistan"=>"Islamabad","afganistan"=>"Kabul","iran"=>"Theran");
ksort($name);
foreach ($name as $k=>$v){
    echo "key is :".$k." value is :".$v."<br>";
}

?>