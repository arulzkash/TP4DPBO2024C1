<?php

class Members extends DB
{
    function getMember()
    {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }

    function getMemberbyId($id)
    {
        $query = "SELECT * FROM members where id_member = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $nama = $data['tnama'];
        $email = $data['temail'];
        $no_telp = $data['tno_telp'];
        $tanggal_masuk = date('Y-m-d');

        $query = "insert into members values ('', '$nama', '$email', '$no_telp', '$tanggal_masuk', 0)";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM members WHERE id_member = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function jumlah_checkin($data, $id)
    {

        $jumlah_checkin = $data['jumlah_checkin'];
        $jumlah_checkin += 1;
     
        $query = "update members set jumlah_checkin = '$jumlah_checkin' where id_member = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
