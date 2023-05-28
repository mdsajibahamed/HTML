
<?php
$a =50;
$b =60;
$c =40;

if($a>$b && $a>$c){
    echo "maximum value is ".$a;
}elseif($b>$a && $b>$c){
    echo "maximum value is b = ".$b;
}else{
    echo "maximun value is ".$c;
}
echo "<hr>";
if($a<$b && $a<$c){
    echo "minimum value is ".$a;
}elseif($b<$a && $b<$c){
    echo "minimum value is b = ".$b;
}else{
    echo "minimun value is ".$c;
}

?>