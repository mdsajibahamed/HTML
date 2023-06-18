

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
    
</body>
</html>
<table>
    <tr>
        <th>actor id </th>
        <th>first name</th>
        <th>last name</th>
        <th>last update</th>
    </tr>
    <?php
    require "./sakila_database.php";
    $sql = "select * from `actor`";
    $result  = $conn->query($sql);
    $conn->close();
    foreach ($result as $key => $value) {
        ?>
        <tr>
            <td><?=$value['actor_id'] ?></td>
            <td><?=$value['first_name'] ?></td>
            <td><?=$value['last_name'] ?></td>
            <td><?=$value['last_update'] ?></td>
        </tr>
        <?php
    }

?>
</table>
