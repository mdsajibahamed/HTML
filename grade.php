<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        <label for=""> Enter Grade</label>
        <input type="text" name = "gpa">
        <select name="gpa" id="">
            <option value="C">C</option>
            <option value="A+">A+</option>
            <option value="B">B</option>
            <option value="A">A</option>
            <option value="D">D</option>
        </select>
        <input type="submit">
    </form>
    <?php
    $grade = $_POST["gpa"];
    if($grade == "A+"){
        echo "Outstanding";
    }elseif($grade == "A"){
        echo "Very good ";
    }elseif($grade == "B"){
        echo "Good ";
    }elseif($grade == "C"){
        echo "Poor ";
    }elseif($grade == "D"){
        echo " Very Poor";
    }else{

        echo "Fail";
    }


    ?>
</body>
</html>