<?php
  class MembersView{
    public function render($data){
      $no = 1;
      $dataMembers = null;
      foreach($data as $val){
        list($id, $nama, $email, $no_telp, $tanggal_masuk, $jumlah_checkin) = $val;
            $dataMembers .= "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $nama . "</td>
                    <td>" . $email . "</td>
                    <td>" . $no_telp . "</td>
                    <td>" . $tanggal_masuk . "</td>
                    <td>" . $jumlah_checkin . "</td>
                    <td>
                    <a href='index.php?id_edit=" . $id .  "' class='btn btn-warning''>Edit</a>
                    <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                    </td>
                    </tr>";
        // }
      }

      $tpl = new Template("templates/index.html");
      $tpl->replace("DATA_TABEL", $dataMembers);
      $tpl->write();
    }
  }