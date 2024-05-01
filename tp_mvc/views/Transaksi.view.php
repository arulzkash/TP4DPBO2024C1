<?php

  class TransaksiView {
    public function render($data){
      $no = 1;
      $dataTranskasi = null;
      $dataMember = null;
      foreach($data['transaksi'] as $val){
        list($id, $deskripsi, $total_harga, $tanggal_transaksi, $status_bayar, $id_member, $id_member2, $nama_member) = $val;
        $dataTranskasi .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $deskripsi . "</td>
                <td>" . $total_harga . "</td>
                <td>" . $tanggal_transaksi . "</td>
                <td>" . $status_bayar . "</td>
                <td>" . $nama_member . "</td>";
        
        if ($status_bayar == "Sudah Bayar") {
            $dataTranskasi .= "
                <td>
                  <a href='transaksi.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
                </td>";
        }
        else {
            $dataTranskasi .= "
                <td>
                  <a href='transaksi.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
                  <a href='transaksi.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
                </td>";
        }
        $dataTranskasi .= "</tr>";
      }

      foreach($data['member'] as $val){
        list($id, $nama) = $val;
        $dataMember .= "<option value='".$id."'>".$nama."</option>";
      }

      $tpl = new Template("templates/transaksi.html");

      $tpl->replace("OPTION", $dataMember);
      $tpl->replace("DATA_TABEL", $dataTranskasi);
      $tpl->write(); 
    }
  }
?>