<?php 

$todos = [
    [
    'text' => 'HTML',
    'done' => true
    ],
    [
    'text' => 'CSS',
    'done' => true
    ],
    [
    'text' => 'JavaScript',
    'done' => true
    ],
    [
    'text' => 'Vue',
    'done' => true
    ],
    [
    'text' => 'Vit',
    'done' => true
    ],
    [
    'text' => 'PHP',
    'done' => false
    ]
    ];

    $json_todos = json_encode($todos);

    var_dump($json_todos);

?>