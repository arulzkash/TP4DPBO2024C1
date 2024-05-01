<?php

class Transaksi extends DB
{
    function getTransaksi()
    {
        $query = "SELECT * FROM transaksi join members on transaksi.id_member = members.id_member";
        return $this->execute($query);
    }

    function add($data)
    {
        $deskripsi = $data['tdeskripsi'];
        $harga = $data['tharga'];
        $tanggal_transaksi = date('Y-m-d');
        $status_bayar = "Belum Bayar";
        $member = $data['cmbmember'];

        $query = "insert into transaksi values ('', '$deskripsi', '$harga', '$tanggal_transaksi', '$status_bayar', '$member')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM transaksi WHERE id_transaksi = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function statusBayar($id)
    {

        $status = "Sudah Bayar";
        $query = "update transaksi set status_bayar = '$status' where id_transaksi = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}


?>