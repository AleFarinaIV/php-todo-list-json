<?php

    $todolist = file_get_contents("./data/todolist.json");
    $todolistJson = json_decode($todolist);

    if (isset($_POST['todoItem'])) {

        $todo_item = $_POST['todoItem'];
        $arrayLength = count($todolistJson);

        array_push($todolistJson, [ 'id' => $arrayLength + 1,  'done' => false, 'name' => $todo_item ]);

        file_put_contents('./data/todolist.json', json_encode($todolistJson));
    }

    header("Content-type: application/json");
    echo json_encode($todolistJson);
?>