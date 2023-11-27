<?php
$i = $_GET;

$todo_string = file_get_contents('./todos.json');
$todos = json_decode($todo_string, true);

unset($todos['results'][$i['value']]);

$todo_string = json_encode($todos);
file_put_contents('./todos.json', $todo_string);
?>;