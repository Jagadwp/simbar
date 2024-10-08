<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['simpan'])) {
            // ambil data hasil submit dari form
            $kode_mat    = mysqli_real_escape_string($mysqli, trim($_POST['kode_mat']));
            $nama_mat    = mysqli_real_escape_string($mysqli, trim($_POST['nama_mat']));
            $jenis       = mysqli_real_escape_string($mysqli, trim($_POST['jenis']));
            $kaliber     = mysqli_real_escape_string($mysqli, trim($_POST['kaliber']));
            $no_lot      = mysqli_real_escape_string($mysqli, trim($_POST['no_lot']));
            $negara      = mysqli_real_escape_string($mysqli, trim($_POST['negara']));
            $siap        = mysqli_real_escape_string($mysqli, trim($_POST['siap']));
            $tidak_siap  = mysqli_real_escape_string($mysqli, trim($_POST['tidak_siap']));
            $stock_akhir = mysqli_real_escape_string($mysqli, trim($_POST['stock_akhir']));
            $satuan      = mysqli_real_escape_string($mysqli, trim($_POST['satuan']));
            $deret       = mysqli_real_escape_string($mysqli, trim($_POST['deret']));
            $gudang      = mysqli_real_escape_string($mysqli, trim($_POST['gudang']));
            $gambar      = mysqli_real_escape_string($mysqli, trim($_POST['gambar']));
            $created_user = $_SESSION['id_user'];

            // Periksa apakah ada record duplikat di database
            $cek_query = mysqli_query($mysqli, "SELECT * FROM is_helm 
                WHERE kode_mat = '$kode_mat' 
                AND no_lot = '$no_lot' 
                AND deret = '$deret' 
                AND gudang = '$gudang'");

            if (mysqli_num_rows($cek_query) > 0) {
                // Jika ditemukan data duplikat, berikan pesan error dan hentikan proses
                header("location: ../../main.php?module=helm&alert=4");
            } else {
                // perintah query untuk menyimpan data ke tabel material
                $query = mysqli_query($mysqli, "INSERT INTO is_helm(kode_mat,nama_mat,jenis,kaliber,no_lot,negara,tidak_siap,siap,stock_akhir,satuan,deret,gudang,gambar,created_user,updated_user) 
                VALUES('$kode_mat','$nama_mat','$jenis','$kaliber','$no_lot','$negara','$tidak_siap','$siap','$stock_akhir','$satuan','$deret','$gudang','$gambar','$created_user','$created_user')")
                                                or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    
    
                // cek query
                if ($query) {
                    // jika berhasil tampilkan pesan berhasil simpan data
                    header("location: ../../main.php?module=helm&alert=1");
                }   
            }
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['id_helm'])) {
                // ambil data hasil submit dari form
                $id_helm     = mysqli_real_escape_string($mysqli, trim($_POST['id_helm']));
                $kode_mat     = mysqli_real_escape_string($mysqli, trim($_POST['kode_mat']));
                $nama_mat     = mysqli_real_escape_string($mysqli, trim($_POST['nama_mat']));
                $jenis        = mysqli_real_escape_string($mysqli, trim($_POST['jenis']));
                $kaliber      = mysqli_real_escape_string($mysqli, trim($_POST['kaliber']));
                $no_lot       = mysqli_real_escape_string($mysqli, trim($_POST['no_lot']));
                $negara       = mysqli_real_escape_string($mysqli, trim($_POST['negara']));
                $siap         = mysqli_real_escape_string($mysqli, trim($_POST['siap']));
                $tidak_siap   = mysqli_real_escape_string($mysqli, trim($_POST['tidak_siap']));
                $stock_akhir  = mysqli_real_escape_string($mysqli, trim($_POST['stock_akhir']));
                $satuan       = mysqli_real_escape_string($mysqli, trim($_POST['satuan']));
                $deret        = mysqli_real_escape_string($mysqli, trim($_POST['deret']));
                $gudang       = mysqli_real_escape_string($mysqli, trim($_POST['gudang']));
                $gambar       = mysqli_real_escape_string($mysqli, trim($_POST['gambar']));
                $updated_user = $_SESSION['id_user'];

                // Periksa apakah ada record duplikat di database
                $cek_query = mysqli_query($mysqli, "SELECT * FROM is_helm 
                    WHERE kode_mat = '$kode_mat' 
                    AND no_lot = '$no_lot' 
                    AND deret = '$deret' 
                    AND gudang = '$gudang'");

                if (mysqli_num_rows($cek_query) > 0) {
                    // Jika ditemukan data duplikat, berikan pesan error dan hentikan proses
                    header("location: ../../main.php?module=helm&alert=4");
                } else {
                    // perintah query untuk mengubah data pada tabel material
                    $query = mysqli_query($mysqli, "UPDATE is_helm SET  nama_mat        = '$nama_mat',
                                                                        jenis           = '$jenis',
                                                                        kaliber         = '$kaliber',
                                                                        no_lot          = '$no_lot',
                                                                        negara          = '$negara',
                                                                        siap            = '$siap',
                                                                        tidak_siap      = '$tidak_siap',
                                                                        stock_akhir     = '$stock_akhir',
                                                                        satuan          = '$satuan',
                                                                        deret           = '$deret',
                                                                        gudang          = '$gudang',
                                                                        gambar          = '$gambar',
                                                                        updated_user    = '$updated_user'
                                                                  WHERE id_helm         = '$id_helm'")
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
    
                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=helm&alert=2");
                    }         
                }
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id_helm = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel material
            $query = mysqli_query($mysqli, "DELETE FROM is_helm WHERE id_helm='$id_helm'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=helm&alert=3");
            }
        }
    }       
}       
?>