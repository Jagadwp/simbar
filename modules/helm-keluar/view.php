<section class="content-header">
  <h1>
    <i class="fa fa-sign-out icon-title"></i> Data Material Keluar gudang penyimpanan

    <a class="btn btn-primary btn-social pull-right" href="?module=form_helm_keluar&form=add" title="Tambah Data" data-toggle="tooltip">
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
    // tampilkan pesan Sukses "Data Helm Masuk berhasil disimpan"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data Helm Keluar berhasil disimpan.
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
                <th class="center">Satkai</th>
                <th class="center">Kode Material</th>
                <th class="center">Nama Material</th>
                <th class="center">Jenis</th>
                <th class="center">Kaliber</th>
                <th class="center">Negara</th>
                <th class="center">Jumlah Keluar</th>
                 <th class="center">Satuan</th>
                <th class="center">Gudang</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel helm
            $query = mysqli_query($mysqli, "SELECT a.kode_transaksi,a.no_sput,a.satkai,a.tanggal_keluar,a.id_helm,a.jumlah_keluar,b.kode_mat,b.nama_mat,b.jenis,b.kaliber,b.negara,b.satuan,b.gudang
                                            FROM is_obat_keluar as a INNER JOIN is_helm as b ON a.id_helm=b.id_helm ORDER BY kode_transaksi DESC")
                                            or die('Ada kesalahan pada query tampil Data Obat Keluar: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              $tanggal         = $data['tanggal_keluar'];
              $exp             = explode('-',$tanggal);
              $tanggal_keluar   = $exp[2]."-".$exp[1]."-".$exp[0];

              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='100' class='center'>$data[kode_transaksi]</td>
                      <td width='100' class='center'>$data[no_sput]</td>
                      <td width='80' class='center'>$tanggal_keluar</td>
                      <td width='100' class='center'>$data[satkai]</td>
                      <td width='80' class='center'>$data[kode_mat]</td>
                      <td width='100'>$data[nama_mat]</td>
                      <td width='100' class='center'>$data[jenis]</td>
                      <td width='100' class='center'>$data[kaliber]</td>
                      <td width='100' class='center'>$data[negara]</td>
                      <td width='100' align='right'>$data[jumlah_keluar]</td>
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