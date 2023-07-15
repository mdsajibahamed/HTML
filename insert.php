<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table,th,tr,td{
            border: 1px solid gold;
            border-collapse: collapse;
        }
        </style>
</head>
<body>
    <table>
        <tr>
            <th>film id</th>
            <th>title</th>
            <th>Description</th>
            <th>release year</th>
            <th>language id</th>
            <th> original language id</th>
            <th> rental duration</th>
            <th> length</th>
            <th> replacement_cost</th>
            <th> rating</th>
            <th> special features</th>
        </tr>

        <?php
        require "./database_film.php";
        $sql = "select * from  `film`";
        $result =$conn->query($sql);
        foreach ($result as $key => $value) {
            ?>
            <tr>
                <td><?=$value['film_id']  ?></td>
                <td><?=$value['title']  ?></td>
                <td><?=$value['description']  ?></td>
                <td><?=$value['release_year']  ?></td>
                <td><?=$value['language_id']  ?></td>
                <td><?=$value['original_language_id']  ?></td>
                <td><?=$value['rental_duration']  ?></td>
                <td><?=$value['length']?></td>
                <td><?=$value['replacement_cost']  ?></td>
                <td><?=$value['rating']  ?></td>
                <td><?=$value['special_features']  ?></td>
            </tr>
        <?php
         
        }
        ?>
    </table>
</body>
</html>