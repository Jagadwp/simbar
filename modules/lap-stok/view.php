<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Laporan Stock Akhir Material Gudang Penyimpanan

    <a class="btn btn-primary btn-social pull-right" href="modules/lap-stok/cetak.php" target="_blank">
      <i class="fa fa-print"></i> Cetak
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel Helm -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Kode Material</th>
                <th class="center">Material</th>
                <th class="center">Jenis</th>
                <th class="center">Kaliber</th>
                <th class="center">Negara</th>
                <th class="center">Tidak Siap</th>
                <th class="center">Siap</th>
                <th class="center">Stock Akhir</th>
                <th class="center">Satuan</th>
                <th class="center">Gudang</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel helm
            $query = mysqli_query($mysqli, "SELECT kode_mat,nama_mat,jenis,kaliber,negara,tidak_siap,siap,stock_akhir,satuan,gudang FROM is_helm ORDER BY nama_mat ASC")
                                            or die('Ada kesalahan pada query tampil Data Helm: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='left'>$data[kode_mat]</td>
                      <td width='80' class='center'>$data[nama_mat]</td>
                      <td width='120' class='center'>$data[jenis]</td>
                      <td width='80' class='left'>$data[kaliber]</td>
                      <td width='80' class='left'>$data[negara]</td>
                      <td width='80' align='right'>$data[tidak_siap]</td>
                      <td width='80' align='right'>$data[siap]</td>
                      <td width='80' align='right'>$data[stock_akhir]</td>
                      <td width='80' class='center'>$data[satuan]</td>
                      <td width='80' class='left'>$data[gudang]</td>
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