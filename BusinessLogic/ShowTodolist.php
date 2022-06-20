<?php

/* 
Menampilkan todo ke list
 */

function showTodoList()
{
    global $todolist;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todolist as $index => $value) {
        echo "$index. $value" . PHP_EOL;
    }
}
