<?php
require_once "../Model/Todolist.php";
require_once "../View/ViewRemoveTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";
addTodolist("iqbal");
addTodoList("maualan");
addTodoList("menggala");

showTodolist();

viewRemoveTodolist();

showTodolist();
