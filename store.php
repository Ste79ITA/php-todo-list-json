<?php 
$new_todo = $_POST ?? 'NONE';


$todos_string = file_get_contents('./todos.json');
$todos = json_decode($todos_string, true);

array_unshift($todos['results'], $new_todo);

$todos_string = json_encode($todos);
file_put_contents('./todos.json', $todos_string);
var_dump($todos_string);
?>