# TP4DPBO2024C1

Saya Imam Chalish Rafidhul Haque NIM 2207260 mengerjakan soal Tugas Praktikum 4 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

**README**

**Deskripsi Program**
Program ini adalah sebuah aplikasi manajemen transaksi untuk sebuah bisnis dan manajemen membership. Aplikasi ini memungkinkan pengguna untuk menambahkan data transaksi, melihat daftar transaksi, mengedit status pembayaran, menghapus transaksi, menambah, menghapus member dan bisa tracking jumlah check in member.

**Alur Program**
1. **Index.php**
    - File ini adalah halaman utama yang menampilkan daftar anggota (members).
    - Pengguna dapat menambahkan anggota baru dengan mengisi form pada bagian "Add Member".
    - Setiap anggota memiliki tombol "Edit" dan "Hapus" untuk mengedit atau menghapus data anggota.

2. **Transaksi.php**
    - Halaman ini menampilkan form untuk menambahkan transaksi baru.
    - Pengguna diminta untuk mengisi deskripsi transaksi, harga, serta memilih anggota yang melakukan transaksi.
    - Setiap transaksi ditampilkan dalam tabel di bawah form.
    - Setiap transaksi memiliki tombol "Edit" dan "Hapus" untuk mengedit atau menghapus transaksi. Jika status pembayarannya sudah "Sudah Bayar", hanya tombol "Hapus" yang tersedia.

**Penjelasan Kelas dan Metode**

1. **MembersController**
    - Kelas ini mengatur logika untuk manajemen anggota.
    - Metode `index()`: Menampilkan halaman utama dengan daftar anggota.
    - Metode `add($data)`: Menambahkan anggota baru berdasarkan data yang diterima dari form.
    - Metode `edit($id)`: Mengedit anggota berdasarkan ID yang diterima.
    - Metode `delete($id)`: Menghapus anggota berdasarkan ID yang diterima.

2. **TransaksiController**
    - Kelas ini mengatur logika untuk manajemen transaksi.
    - Metode `index()`: Menampilkan halaman utama dengan form untuk menambahkan transaksi dan daftar transaksi.
    - Metode `add($data)`: Menambahkan transaksi baru berdasarkan data yang diterima dari form.
    - Metode `edit($id)`: Mengedit status pembayaran transaksi berdasarkan ID yang diterima.
    - Metode `delete($id)`: Menghapus transaksi berdasarkan ID yang diterima.

3. **Members**
    - Kelas ini berfungsi untuk melakukan operasi database terkait anggota.
    - Metode `getMember()`: Mengambil semua data anggota dari database.
    - Metode `getMemberbyId($id)`: Mengambil data anggota berdasarkan ID yang diberikan.
    - Metode `add($data)`: Menambahkan anggota baru ke dalam database.
    - Metode `delete($id)`: Menghapus anggota berdasarkan ID yang diberikan.
    - Metode `jumlah_checkin($data, $id)`: Mengupdate jumlah check-in anggota berdasarkan ID yang diberikan.

4. **Transaksi**
    - Kelas ini berfungsi untuk melakukan operasi database terkait transaksi.
    - Metode `getTransaksi()`: Mengambil semua data transaksi beserta nama anggota dari database.
    - Metode `add($data)`: Menambahkan transaksi baru ke dalam database.
    - Metode `delete($id)`: Menghapus transaksi berdasarkan ID yang diberikan.
    - Metode `statusBayar($id)`: Mengupdate status pembayaran transaksi menjadi "Sudah Bayar" berdasarkan ID yang diberikan.

**Instruksi Penggunaan**
1. Pastikan server PHP dan MySQL sudah terpasang.
2. Import database yang telah disediakan ke dalam MySQL.
3. Sesuaikan konfigurasi koneksi database pada file `conf.php`.
4. Buka halaman index.php untuk mengakses fitur manajemen anggota.
5. Buka halaman transaksi.php untuk mengakses fitur manajemen transaksi.

**Screenshots**

![Screenshot_2](https://github.com/arulzkash/TP4DPBO2024C1/assets/73780374/032d6908-be1b-447f-9a79-7d9ebd3744a2)
![Screenshot_3](https://github.com/arulzkash/TP4DPBO2024C1/assets/73780374/51e5d350-0518-4e5d-8729-bcf148460413)

**Screenrecord**

https://github.com/arulzkash/TP4DPBO2024C1/assets/73780374/392b4af9-a91b-4d3d-8537-ae0e2554b672



