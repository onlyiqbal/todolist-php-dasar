<?php
require_once __DIR__ . "/Model/Todolist.php";
require_once __DIR__ . "/BusinessLogic/AddTodolist.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodolist.php";
require_once __DIR__ . "/BusinessLogic/ShowTodolist.php";
require_once __DIR__ . "/View/ViewShowTodolist.php";
require_once __DIR__ . "/View/ViewAddTodolist.php";
require_once __DIR__ . "/View/ViewRemoveTodolist.php";
require_once __DIR__ . "/Helper/Input.php";


echo "Aplikasi Todolist" . PHP_EOL;

viewShowTodoList();
