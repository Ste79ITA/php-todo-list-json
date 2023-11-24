<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Todo List Json</title>
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
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


</head>
<body>
    <div id="app">
        <div class="container">
            <div class="todos">
                <h1 class="todos_title">ToDo's</h1>
                <form action="" method="POST">
                    <input required class="input" type="text" placeholder="Enter a New To do">
                </form>
                <ul class="content">
                    <li class="todo">
                        <p>HTML</p>
                        <div class="icon">
                        <i class="fa-solid fa-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                    </li>
                    <li class="todo">CSS</li>
                    <li class="todo">JavScript</li>
                </ul>
            </div>
        </div>
    </div>
    

<script src="./js/app.js"></script>
</body>
</html>