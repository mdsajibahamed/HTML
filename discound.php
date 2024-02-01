
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Enter Your amount :</label>
        <input type="text" name="sels">
        <input type="submit">

        
    </form>
<?php
if (isset($_POST["sels"])){
$s = $_POST["sels"];
if($s>5000){
    $amount = $s*0.10;
}
echo "Sels amount :". $s."<br>";
    echo "Discount  amount :" .$amount."<br>";
    echo "payable amount  :".($s-$amount);
}

?>
</body>
</html>
