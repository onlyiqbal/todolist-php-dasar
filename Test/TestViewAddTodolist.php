<?php

require_once "../View/ViewAddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("iqbal");
addTodolist("maulana");
addTodolist("menggala");

viewAddTodolist();

showTodolist();

viewAddTodolist();

showTodolist();
