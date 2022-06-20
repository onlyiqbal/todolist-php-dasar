<?php
require_once __DIR__ .  "/../Helper/Input.php";
require_once __DIR__ .  "/../BusinessLogic/RemoveTodolist.php";

function viewRemoveTodolist()
{
    echo "MENGAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal Menghapus Todolist" . PHP_EOL;
    } else {
        $success = removeTodolist($pilihan);

        if ($success) {
            echo "Sukses Menghapus Todo $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Mengapus Todo $pilihan" . PHP_EOL;
        }
    }
}
