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
        echo "Outstanding Grade ";
    }elseif($grade == "A"){
        echo "Very good marks ";
    }elseif($grade == "B"){
        echo "Good ";
    }elseif($grade == "C"){
        echo "Poor  marks";
    }elseif($grade == "D"){
        echo " Very Poor";
    }else{

        echo " You are Fail";
    }

    ?>

    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus corrupti fuga non. Voluptates temporibus unde consequuntur laborum? Consequuntur nostrum dolorum aut excepturi reprehenderit reiciendis consequatur. Culpa quam alias incidunt est.</p>
    </body>
    </html>
</body>
</html>
