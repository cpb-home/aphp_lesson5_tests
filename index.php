<?php

require_once './classes/Users.php';
require_once './classes/UserTableWrapper.php';
require_once './classes/ducks/DecoyDuck.php';
require_once './classes/ducks/MallardDuck.php';
require_once './classes/ducks/RedheadDuck.php';
require_once './classes/ducks/RubberDuck.php';

$users = new Users();
$users->insert(['name'=>'Иван', 'surname'=>'Петров', 'age'=>31]);
$users->insert(['name'=>'Пётр', 'surname'=>'Сидоров', 'age'=>33]);
$users->insert(['name'=>'Сидор', 'surname'=>'Владимиров', 'age'=>35]);
$users->insert(['name'=>'Владимир', 'surname'=>'Ленин', 'age'=>31]);
$users->insert(['name'=>'Лена', 'surname'=>'Аннина', 'age'=>33]);
$users->insert(['name'=>'Анна', 'surname'=>'Иванова', 'age'=>35]);

$allUsers = $users->get();
foreach ($allUsers as $singleUser) {
    echo $singleUser['name'] . ' ' . $singleUser['surname'] . ', возраст ' . $singleUser['age'] . PHP_EOL;
}
echo PHP_EOL;

$users->delete(2);
$allUsers = $users->get();
foreach ($allUsers as $key=>$singleUser) {
    echo $key . '. ' .$singleUser['name'] . ' ' . $singleUser['surname'] . ', возраст ' . $singleUser['age'] . PHP_EOL;
}

echo PHP_EOL;

$users->update(3, ['name'=>'Игорь', 'surname'=>'Игорев', 'age'=>49]);
$allUsers = $users->get();
foreach ($allUsers as $key=>$singleUser) {
    echo $key . '. ' .$singleUser['name'] . ' ' . $singleUser['surname'] . ', возраст ' . $singleUser['age'] . PHP_EOL;
}

echo PHP_EOL . PHP_EOL . "DUCKS TASK" . PHP_EOL;

$mallardDuck = new MallardDuck();
$mallardDuck->can();

$redheadDuck = new RedheadDuck();
$redheadDuck->can();

$rubberDuck = new RubberDuck();
$rubberDuck->can();

$decoyDuck = new DecoyDuck();
$decoyDuck->can();