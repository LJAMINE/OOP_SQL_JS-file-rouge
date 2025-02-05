<?php
include "config.php";
include "user.php";

$new=new User($pdo);
 $users=$new->display();


 if (isset($_POST["submit"])) {
    $seartc=$_POST["search"];
    $users=$new->search($seartc);
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="search" id="">
    <input type="submit" name="submit" value="submit" id="">
</form>

<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>age</th>
    </thead>
    <tbody>
        <?php foreach($users as $user) : ?>
            <tr>
                <td><?php echo $user["id"] ?></td>
                <td><?php echo $user["nom"] ?></td>
                <td><?php echo $user["email"] ?></td>
                <td><?php echo $user["age"] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</body>
</html>