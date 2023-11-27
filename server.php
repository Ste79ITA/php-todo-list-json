<?php 

    $todos_json = file_get_contents(__DIR__ . '/todos.json');
    // $todos = json_decode($todos_json, true);

    // header('Content-Type: application/json');
    
    echo $todos_json;

?>