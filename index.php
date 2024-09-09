<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>TodoList</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row gy-2">
                <div class="col-12">
                    <h1>Todo List</h1>
                </div>
                <div class="col-12">
                    <div class="d-flex">
                        <input type="text" class="form-control" name="todo_item" id="todo_item" placeholder="Aggiungi qualcosa da fare..."
                        v-model="todo_item">
                        <button class="btn btn-sm btn-primary" @click="addTodoItem">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js" type="text/javascript"></script>

</body>

</html>