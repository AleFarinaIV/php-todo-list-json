<?php

    $todolist = file_get_contents("./data/todolist.json");
    $todolistJson = json_decode($todolist);

    header("Content-type: application/json");
    echo json_encode($todolistJson);
?>