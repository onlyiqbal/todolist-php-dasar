<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("iqbal");
addTodolist("maulana");
addTodolist("menggala");

var_dump($todolist);
