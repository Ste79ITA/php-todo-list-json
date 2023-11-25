<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script
      src="https://kit.fontawesome.com/6bbc3537db.js"
      crossorigin="anonymous"
    ></script>
    <script>
      window.FontAwesomeConfig = {
        searchPseudoElements: true,
      };
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<?php 
$title = 'php Todo List Json';
?>

<body>
    <div id="app">
        <div class="container">
            <div class="todos">
                <h1 class="todos_title">ToDo's</h1>
                    <input class="input" type="text" placeholder="Enter a New To do" @keyup.enter="sendTodo" v-model="newTodo">
                <ul class="content">
                    <li class="todo" v-for="(todo, i) in todos">
                        <p :class="{taskDone: todo.done}" @click="taskDone(todo)">{{ todo.text }}</p>
                        <div class="icon">
                        <i @click="taskDone(todo)" class="fa-solid fa-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    

<script src="./js/app.js"></script>
</body>
</html>