<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Data Material Isian Gudang

    <a class="btn btn-primary btn-social pull-right" href="?module=form_helm&form=add" title="Tambah Data" data-toggle="tooltip">
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
    // tampilkan pesan Sukses "Data material baru berhasil disimpan"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data material baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data material berhasil diubah"
    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data material berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data material berhasil dihapus"
    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data material berhasil dihapus.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel helm -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Gambar</th>
                <th class="center">Kode Material</th>
                <th class="center">Material</th>
                <th class="center">Jenis</th>
                <th class="center">Kaliber</th>
                <th class="center">No.Lot</th>
                <th class="center">Negara</th>
                <th class="center">Siap Pakai</th>
                <th class="center">Tidak Siap</th>
                <th class="center">Stock Akhir</th>
                <th class="center">Satuan</th>
                <th class="center">Deret</th>
                <th class="center">Gudang</th>
                
                <th>
                </th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel material
            $query = mysqli_query($mysqli, "SELECT id_helm,kode_mat,nama_mat,jenis,kaliber,no_lot,negara,tidak_siap,siap,stock_akhir,satuan,deret,gudang,gambar FROM is_helm ORDER BY id_helm DESC")
                                            or die('Ada kesalahan pada query tampil Data material: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
            // menampilkan isi tabel dari database ke tabel di aplikasi
                echo "<tr>
                      <td width='50' class='center'>$no</td>";

                      if ($data['gambar']=="") { ?>
                        <td class='center'><img class='img-user' src='images/gambar/contoh-amocil.png' width='60'></td>
                      <?php
                      } else { ?>
                        <td class='center'><img class='img-user' src='images/gambar/<?php echo $data['gambar']; ?>' width='60'></td>
                      <?php
                      }
                 echo "
                      <td width='120'align='left'>$data[kode_mat]</td>
                      <td width='80'>$data[nama_mat]</td>
                      <td width='140'class='left'>$data[jenis]</td>
                      <td width='120'class='left'>$data[kaliber]</td>
                      <td width='80'class='left'>$data[no_lot]</td>
                      <td width='80'class='center'>$data[negara]</td>
                      <td width='100' align='right'>$data[siap]</td>
                      <td width='100' align='right'>$data[tidak_siap]</td>
                      <td width='100' align='right'>$data[stock_akhir]</td>
                      <td width='80' class='center'>$data[satuan]</td>
                      <td width='40'class='left'>$data[deret]</td>
                      <td width='80'class='lect'>$data[gudang]</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_helm&form=edit&id=$data[id_helm]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="modules/helm/proses.php?act=delete&id=<?php echo $data['id_helm'];?>" onclick="return confirm('Anda yakin ingin menghapus data material <?php echo $data['nama_mat']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
            <?php
              echo "    </div>
                      </td>
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