<script type="text/javascript">
  function tampil_helm(input){
    var num = input.value;

    $.post("modules/helm-masuk/helm.php", {
      dataidobat: num,
    }, function(response) {      
      $('#stock').html(response)

      document.getElementById('jumlah_masuk').focus();
    });
  }

  function cek_jumlah_masuk(input) {
    jml = document.formObatmasuk.jumlah_masuk.value;
    var jumlah = eval(jml);
    if(jumlah < 1){
      alert('Jumlah Masuk Tidak Boleh Nol !!');
      input.value = input.value.substring(0,input.value.length-1);
    }
  }

  function hitung_total_stok() {
    bil1 = document.formObatmasuk.stock.value;
    bil2 = document.formObatmasuk.jumlah_masuk.value;

    if (bil2 == "") {
      var hasil = "";
    }
    else {
      var hasil = eval(bil1) + eval(bil2);
    }

    document.formObatmasuk.total_stock.value = (hasil);
  }
</script>

<?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Input Data Material Masuk gudang penyimpanan
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=helm_masuk"> Material Masuk </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/helm-masuk/proses.php?act=insert" method="POST" name="formObatmasuk">
            <div class="box-body">
              <?php  
              // fungsi untuk membuat kode transaksi
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(kode_transaksi,5) as kode FROM is_obat_masuk
                                                ORDER BY kode_transaksi DESC LIMIT 1")
                                                or die('Ada kesalahan pada query tampil kode_transaksi : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                  // mengambil data kode transaksi
                  $data_id = mysqli_fetch_assoc($query_id);
                  $kode    = $data_id['kode']+1;
              } else {
                  $kode = 1;
              }

              // buat kode_transaksi
              $tahun          = date("Y");
              $buat_id        = str_pad($kode, 5, "0", STR_PAD_LEFT);
              $kode_transaksi = "PMB/HAR-$tahun-$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Transaksi</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="kode_transaksi" value="<?php echo $kode_transaksi; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Dasar/S.P</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="no_spus" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_keluar" autocomplete="off" value="<?php echo date("d-m-Y"); ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sumber</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sumber" autocomplete="off" required>
                </div>
              </div>

              <hr>

              <div class="form-group">
                <label class="col-sm-2 control-label">Material</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="id_helm" data-placeholder="-- Pilih material dan lokasi gudang yang paling sesuai --" onchange="tampil_helm(this)" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_obat = mysqli_query($mysqli, "SELECT id_helm,kode_mat,nama_mat,jenis,kaliber,negara,gudang FROM is_helm ORDER BY nama_mat ASC")
                                                            or die('Ada kesalahan pada query tampil Material: '.mysqli_error($mysqli));
                      while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                        echo"<option value=\"$data_obat[id_helm]\"> $data_obat[kode_mat] | $data_obat[nama_mat] | $data_obat[jenis] | $data_obat[kaliber] | $data_obat[negara] | $data_obat[gudang] </option>";
                      }
                    ?>
                  </select>
                </div>
              </div>
              
              <span id='stock'>
              <div class="form-group">
                <label class="col-sm-2 control-label">Stock Tersedia</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="stock" name="stock" readonly required>
                </div>
              </div>
              </span>

              <div class="form-group">
                <label class="col-sm-2 control-label">Jumlah Material Masuk</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="jumlah_masuk" name="jumlah_masuk" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" onkeyup="hitung_total_stok(this)&cek_jumlah_masuk(this)" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Jumlah Stok Akhir</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="total_stock" name="total_stock" readonly required>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=helm_masuk" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>