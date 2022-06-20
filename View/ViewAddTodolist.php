<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodolist.php";
require_once __DIR__ .  "/../Model/Todolist.php";


function viewAddTodolist()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x jika batal)");
    if ($todo == "x") {
        echo "Batal Menambah Todolist" . PHP_EOL;
    } else {
        addTodolist($todo);
    }
}
