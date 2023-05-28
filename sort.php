<?php
$countryList  = array("name" => "sajib", "fater's name" =>"Motiur rahaman ","mother's name " =>"kulsum begum ","nationality" => "bangladesh ","religion"=>"islam ");

ksort($countryList);
foreach ($countryList as $k=> $v){
  echo "key is : ".$k. "  value  is  :".$v."<br>";
}
?>
