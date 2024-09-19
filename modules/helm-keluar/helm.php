<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

if(isset($_POST['dataidobat'])) {
	$kode_mat = $_POST['dataidobat'];

  // fungsi query untuk menampilkan data dari tabel helm
  $query = mysqli_query($mysqli, "SELECT kode_mat,nama_mat,satuan,stock_akhir FROM is_helm WHERE kode_mat='$kode_mat'")
                                  or die('Ada kesalahan pada query tampil data material: '.mysqli_error($mysqli));

  // tampilkan data
  $data = mysqli_fetch_assoc($query);

  $stock_akhir   = $data['stock_akhir'];
  $satuan        = $data['satuan'];

	if($stock_akhir != '') {
		echo "<div class='form-group'>
                <label class='col-sm-2 control-label'>Stock Tersedia </label>
                <div class='col-sm-5'>
                  <div class='input-group'>
                    <input type='text' class='form-control' id='stock' name='stock' value='$stock_akhir' readonly>
                    <span class='input-group-addon'>$satuan</span>
                  </div>
                </div>
              </div>";
	} else {
		echo "<div class='form-group'>
                <label class='col-sm-2 control-label'>Stock</label>
                <div class='col-sm-5'>
                  <div class='input-group'>
                    <input type='text' class='form-control' id='stock' name='stock' value='Stok material tidak ditemukan' readonly>
                    <span class='input-group-addon'>Satuan stok tidak ditemukan</span>
                  </div>
                </div>
              </div>";
	}		
}
?> 