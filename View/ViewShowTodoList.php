<?php
require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ .  "/../BusinessLogic/ShowTodolist.php";
require_once __DIR__ .  "/../View/ViewAddTodolist.php";
require_once __DIR__ . "/../View/ViewRemoveTodolist.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodolist()
{
    while (true) {
        showTodolist();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $result = input("Pilih");

        if ($result == "1") {
            viewAddTodolist();
        } else if ($result == "2") {
            viewRemoveTodolist();
        } else if ($result == "x") {
            break;
        } else {
            echo "Pilihan Tidak Dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
