<?php
require_once "../BusinessLogic/RemoveTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";
require_once "../Model/Todolist.php";

addTodolist("iqbal");
addTodolist("maulana");
addTodolist("menggala");
addTodolist("joko");
addTodolist("budi");

showTodolist();

removeTodolist(2);

showTodolist();
