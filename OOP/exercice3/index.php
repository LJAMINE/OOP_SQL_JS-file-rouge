<?php

class DB
{
    private string $host = "localhost";
    private string $username = "root";
    private string $dbname = "userss";
    private string $password = "";
    private ?PDO $connexion = null;

    public function connecter()
    {

        try {
            $this->connexion = new PDO("mysql:host={$this->host};dbname={$this->dbname};", $this->username, $this->password, []);
            echo "good";
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function affiche() {

        $stmt=$this->connexion->query("select * from player");
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new DB();
$db->connecter();
$users=$db->affiche();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table> 
        <thead>
            <th>name</th>
            <th>email</th>
            <th>pass</th>
        </thead>
        <tbody>
            <?php foreach($users as $user) :?>
            <tr>
                <td><?php echo $user["name_db"] ?></td>
                <td><?php echo $user["email"] ?></td>
                <td><?php echo $user["password"] ?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>