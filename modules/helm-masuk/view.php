<section class="content-header">
  <h1>
    <i class="fa fa-sign-out icon-title"></i> Data Material Masuk gudang penyimpanan

    <a class="btn btn-primary btn-social pull-right" href="?module=form_helm_masuk&form=add" title="Tambah Data" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Tambah
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  
    // fungsi untuk menampilkan pesan
    // jika alert = "" (kosong)
    // tampilkan pesan "" (kosong)
    if (empty($_GET['alert'])) {
      echo "";
    } 
    // jika alert = 1
    // tampilkan pesan Sukses "Data Material Masuk berhasil disimpan"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data Material masuk berhasil disimpan.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel Helm -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Kode Transaksi</th>
                <th class="center">Dasar/S.P</th>
                <th class="center">Tanggal</th>
                <th class="center">Sumber</th>
                <th class="center">Kode Material</th>
                <th class="center">Nama Material</th>
                <th class="center">Jenis</th>
                <th class="center">Kaliber</th>
                <th class="center">Negara</th>
                <th class="center">Jumlah Masuk</th>
                 <th class="center">Satuan</th>
                <th class="center">Gudang</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel helm
            $query = mysqli_query($mysqli, "SELECT a.kode_transaksi,a.no_spus,a.tanggal_masuk,a.sumber,a.kode_mat,a.jumlah_masuk,b.kode_mat,b.nama_mat,b.jenis,b.kaliber,b.negara,b.satuan,b.gudang
                                            FROM is_obat_masuk as a INNER JOIN is_helm as b ON a.kode_mat=b.kode_mat ORDER BY kode_transaksi DESC")
                                            or die('Ada kesalahan pada query tampil Data Material Masuk: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              $tanggal         = $data['tanggal_masuk'];
              $exp             = explode('-',$tanggal);
              $tanggal_masuk   = $exp[2]."-".$exp[1]."-".$exp[0];

              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='100' class='center'>$data[kode_transaksi]</td>
                      <td width='100' class='center'>$data[no_spus]</td>
                      <td width='80' class='center'>$tanggal_masuk</td>
                      <td width='100' class='center'>$data[sumber]</td>
                      <td width='80' class='center'>$data[kode_mat]</td>
                      <td width='100'>$data[nama_mat]</td>
                      <td width='100' class='center'>$data[jenis]</td>
                      <td width='100' class='center'>$data[kaliber]</td>
                      <td width='100' class='center'>$data[negara]</td>
                      <td width='100' align='right'>$data[jumlah_masuk]</td>
                      <td width='80' class='center'>$data[satuan]</td>
                      <td width='100' class='center'>$data[gudang]</td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content