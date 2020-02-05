<?php
// namespace Tutorial;
// namespace App;
// namespace Lesson\First\Objects

// Начиная с версии PHP 5.3.0 можно использовать анонимные функции
spl_autoload_register(function ($class) {
    // include 'classes/' . $class . '.class.php';

    echo 'Load class: ', $class, PHP_EOL;
});

$user = [
    'name' => 'Dmitriy',
    'age' => 37,
    'say' => function () {
        echo 'Hi';
    }
];

var_dump('User from array', $user);

// namespace Tutorial;

class User
{
    public $name = 'Dmitriy';

    public $age = 37;

    public function say()
    {
        echo 'Hi';
    }
}

var_dump('User from class', new User());
