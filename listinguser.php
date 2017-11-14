<?php
//Ouvre une connexion à un serveur MySQL
$dsn = "mysql:dbname=dwm8;host=127.0.0.1;charset=UTF8";
$username = "root";
$password = "0000";
$pdo = new PDO($dsn, $username, $password);

//Création de la query
$query= "SELECT * FROM `users` ORDER BY `birthday` ASC ;";

//Envoie de la query à mysql
$result = $pdo->query($query);

foreach ($result as $row) {
  echo "<tr>";
    echo "<td>" .$row['id'] . "</td>";
    echo "<td>" .$row['email'] . "</td>";
    echo "<td>" .$row['password'] . "</td>";
    echo "<td>" .$row['birthday'] . "</td>";
  echo "</tr>";
}
?>
