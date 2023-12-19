<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    
<body>
    <h2>This is discount part</h2>
    
    <form action="" method="post">
        <label for=""> Enter your value </label>
        <input type="text" name="sels" id="">
        <input type="submit">

    </form>
    <?php
    $amountt = 0;
    if(isset($_POST["sels"])){
    $s = $_POST["sels"];
    if ($s>5000){
        $amountt =$s*0.10;

    }
    echo "sels amount is :".$s."<br>";
    echo "discount amout is :". $amountt."<br>";
    echo "payable amount is : ". ($s-$amountt);

    }

?>
</body>

</html>
