<?php

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Transaksi.controller.php");

$transaksi = new TransaksiController();

if (isset($_POST['add'])) {
    //memanggil add
    $transaksi->add($_POST);
}
// //mengecek apakah ada id_hapus, jika ada maka memanggil fungsi delete
else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $transaksi->delete($id);
}
else if (!empty($_GET['id_edit'])) {
    //memanggil add
    $id = $_GET['id_edit'];
    $transaksi->edit($id);
}
else{
    $transaksi->index();
}

