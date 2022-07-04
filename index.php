<?php

echo "<h1>Hello world</h1>";

$a = 5;
$b = 12;

function calculator1($a, $b)
{
    $c = $a + $b;
    echo "<h3>$a + $b = $c</h3>";
}

calculator1($a, $b);

$data = [
    $user1 = [
        "firstName" => "Lucas",
        "lastName" => "Wurtz",
        "pseudo" => "Abject",
        "age" => 22
    ],
    $user2 = [
        "firstName" => "Marjorie",
        "lastName" => "Salingue",
        "Pseudo" => "Tael",
        "age" => 20
    ]
];

function test($data, $user1, $user2)
{
    $firstUser = $data[$user1];

    echo "<ref";

    var_dump("<h2>$firstUser</h2>");

    echo "<ref";
}

test($data, $user1, $user2);
