<?php
define ('YEAR', 2020);
define ('KURS', 27.397);
$name = 'Evgeniy';
$surname = 'Lobachevskiy';
$age = '28';
$year = 2020;
$born = $year - $age;
$day = $age * 365;


echo "My name is $name $surname. I was born at $born";
echo '<br />';
echo "The year is: " . ceil(YEAR / 1000);


echo '<br />';
echo "100 $ стоят : " . KURS * 100 . " гривен";
echo '<br />';
echo "100 гривен стоят: "  . 100 / KURS . " $";

echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';

//$arr [] = $Name;
//$arr [] = 'Surname';
//
//$assoc = [];
//$assoc = ['name'] = $name;
//$assoc = ['surname'] = $surname;
//var_dump($assoc);
//$user['name'];

$user = [
    'name' => 'Evgeniy',
    'surname' => 'Lobachevskyi'
];

$user['age'] = $age;
echo '<br />';
echo "My name is {$user['name']} {$user['age']}";
