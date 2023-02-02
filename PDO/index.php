<?php
require ("User.php");

$db = new PDO(
    'mysql:host=db.3wa.io;port=3306;dbname=anthonycormier_phpj5',
    'anthonycormier',
    'f7af5a3387016b3d12b42619a8ad2703'
);

$user = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$user1 = new User($user["firstName"], $user["lastName"], $user["email"]);

// $query = $db->prepare('SELECT * FROM users LIMIT 1');
// $query->execute();
// $user = $query->fetch(PDO::FETCH_ASSOC);

// var_dump($user);
// $newUser = new User($user["first_name"], $user["last_name"], $user["email"]);
// var_dump($newUser);

$query = $db->prepare('SELECT * FROM users');
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

$tabUsers = [];
for ($i = 0; $i < count($users); $i++) {
    $newUser = new User($users[$i]["first_name"], $users[$i]["last_name"], $users[$i]["email"]);
    $newUser->setId($i);
    array_push($tabUsers, $newUser);
}

$query = $db->prepare("INSERT INTO users VALUES (null, :firstName, :lastName, :email)");

$parameters = [
    'firstName' => $user1->getFirstName(),
    'lastName' => $user1->getLastName(),
    'email' => $user1->getEmail()
    ];
    
$query->execute($parameters);
    
var_dump($tabUsers);
?>