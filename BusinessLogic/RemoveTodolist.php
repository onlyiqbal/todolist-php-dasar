<?php

/* 
Menghapus todo di list
 */

function removeTodolist(int $number)
{
    global $todolist;

    if ($number > count($todolist)) {
        return false;
    }

    for ($i = $number; $i < count($todolist); $i++) {
        $todolist[$i] = $todolist[$i + 1];
    }
    // var_dump($todolist);
    unset($todolist[count($todolist)]);

    return true;
}
