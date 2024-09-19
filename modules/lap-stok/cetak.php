<html> <!-- Bagian halaman HTML yang akan print -->
<?php
session_start();
ob_start();
// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";
// panggil fungsi untuk format tanggal
include "../../config/fungsi_tanggal.php";
// panggil fungsi untuk format rupiah
include "../../config/fungsi_rupiah.php";

$hari_ini = date("d-m-Y");

$no = 1;
// fungsi query untuk menampilkan data dari tabel helm
$query = mysqli_query($mysqli, "SELECT kode_mat,nama_mat,jenis,kaliber,negara,tidak_siap,siap,stock_akhir,satuan,gudang FROM is_helm ORDER BY nama_mat ASC")
                                or die('Ada kesalahan pada query tampil Data material: '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);
?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>SIGUDAM-BAG.PAN</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
        <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
    </head>
    <body>
        <div id="title">
            BAGIAN PENYIMPANAN - ARSENAL
        </div>
        <div id="title">
            LAPORAN STOCK AKHIR MATERIAL ISIAN GUDANG
        </div>
        
        <hr><br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle">NO.</th>
                        <th height="20" align="center" valign="middle">KODE MATERIAL</th>
                        <th height="20" align="center" valign="middle">MATERIAL</th>
                        <th height="20" align="center" valign="middle">JENIS</th>
                        <th height="20" align="center" valign="middle">KALIBER</th>
                        <th height="20" align="center" valign="middle">NEGARA</th>
                        <th height="20" align="center" valign="middle">TIDAK SIAP</th>
                        <th height="20" align="center" valign="middle">SIAP</th>
                        <th height="20" align="center" valign="middle">STOCK AKHIR</th>
                        <th height="20" align="center" valign="middle">SATUAN</th>
                        <th height="20" align="center" valign="middle">GUDANG</th>
                        <th height="20" align="center" valign="middle">KET</th>
                    </tr>
                </thead>
                <tbody>
<?php
        // tampilkan data
        while ($data = mysqli_fetch_assoc($query)) {
            
            // menampilkan isi tabel dari database ke tabel di aplikasi
            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='100' height='13' align='center' valign='middle'>$data[kode_mat]</td>
                        <td style='padding-left:5px;' width='80' height='13' valign='middle'>$data[nama_mat]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[jenis]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[kaliber]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[negara]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[tidak_siap]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[siap]</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$data[stock_akhir]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[satuan]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[gudang]</td>
                        <td width='80' height='13' align='center' valign='middle'></td>
                    </tr>";
            $no++;
        }
?>
                </tbody>
            </table>

            <div id="footer-tanggal">
                Batuporon, <?php echo tgl_eng_to_ind("$hari_ini"); ?>
            </div> 
            <div id="footer-jabatan">
                KEPALA BAGIAN PENYIMPANAN
            </div>
            
            <div id="footer-nama">
                HUSNAN
            </div>
            <div id="footer-nama">
                Mayor Laut (E) NRP: 99999/P
            </div>
        </div>
        
        <script>
		window.print();
	    </script>

    </body>
</html><!-- Akhir halaman HTML yang akan di print -->