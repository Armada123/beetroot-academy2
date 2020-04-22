<?php
define('NEW_LINE', '</br>');
$users = [
    [
        'name' => 'Bob',
        'surname' => 'Martin',
        'age' => 75,
        'gender' => 'man',
        'avatar' => 'https://i.ytimg.com/vi/sDnPs_V8M-c/hqdefault.jpg',
        'animals' => ['dog']
    ],
    [
        'name' => 'Alice',
        'surname' => 'Merton',
        'age' => 25,
        'gender' => 'woman',
        'avatar' => 'https://i.scdn.co/image/d44a5d71596b03b5dc6f5bbcc789458700038951',
        'animals' => ['dog', 'cat']
    ],
    [
        'name' => 'Jack',
        'surname' => 'Sparrow',
        'age' => 45,
        'gender' => 'man',
        'avatar' => 'https://pbs.twimg.com/profile_images/427547618600710144/wCeLVpBa_400x400.jpeg',
        'animals' => []
    ],
    [
        'name' => 'Angela',
        'surname' => 'Merkel',
        'age' => 65,
        'gender' => 'woman',
        'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Besuch_Bundeskanzlerin_Angela_Merkel_im_Rathaus_K%C3%B6ln-09916.jpg/330px-Besuch_Bundeskanzlerin_Angela_Merkel_im_Rathaus_K%C3%B6ln-09916.jpg',
        'animals' => ['dog', 'parrot', 'horse']
    ]

];

if (!empty($_POST)) {
    $users[] = $_POST;
}

$ages  = array_column($users, 'age');

var_dump($ages);

$maxAge = max($ages);

$maxAgeId = array_search($maxAge, $ages);

echo "<br/>";

var_dump($maxAgeId);

$oldestUser = $users[$maxAgeId];



$names = array_column($users, 'name');
print_r($names);

define('JACK_NAME', "Jack");
$jackId = array_search(JACK_NAME, $names);
echo NEW_LINE;
print_r($jackID[$jackId]);

//$randomUserId = rand(0, count($users) - 1);

//$randomUser = $users[];


//print_r($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<br/>
<h1>Статистика</h1>
<div class="container">
    <ul>

        <li>Самый старый пользователь: <?=$oldestUser['name'] . "" . $oldestUser['surname'] . "" . $oldestUser['age'] ?></li>
        <li> Общее количество юзеров: <?=count($users)?></li>
        <a href="user.php">На страницу регистрации</a>

        <table>
          <thead>
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Age</th>
              <th></th>
          </tr>
          <tr>
              <td><?=$jackId ?></td>
              <td><?=$users[$jackId] ?></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          </thead>
        </table>


    </ul>
    </div>
</body>
</html>
