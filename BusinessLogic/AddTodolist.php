<?php

/* 
Menambahkan todo ke list
*/

function addTodolist(string $todo)
{
    global $todolist;

    $index = count($todolist) + 1;

    $todolist[$index] = $todo;
}
