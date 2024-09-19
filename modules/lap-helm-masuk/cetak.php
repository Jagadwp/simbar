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

// ambil data hasil submit dari form
$tgl1     = $_GET['tgl_awal'];
$explode  = explode('-',$tgl1);
$tgl_awal = $explode[2]."-".$explode[1]."-".$explode[0];

$tgl2      = $_GET['tgl_akhir'];
$explode   = explode('-',$tgl2);
$tgl_akhir = $explode[2]."-".$explode[1]."-".$explode[0];

if (isset($_GET['tgl_awal'])) {
    $no    = 1;
    // fungsi query untuk menampilkan data dari tabel material masuk
    $query = mysqli_query($mysqli, "SELECT a.kode_transaksi,a.no_spus,a.sumber,a.tanggal_masuk,a.kode_mat,a.jumlah_masuk,b.kode_mat,b.nama_mat,b.jenis,b.kaliber,b.negara,b.stock_akhir,b.satuan,b.gudang
                                    FROM is_obat_masuk as a INNER JOIN is_helm as b ON a.kode_mat=b.kode_mat
                                    WHERE a.tanggal_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir'
                                    ORDER BY a.kode_transaksi ASC") 
                                    or die('Ada kesalahan pada query tampil Transaksi : '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>SIGUDAM-BAG.PAN</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
            LAPORAN DATA MATERIAL MASUK 
        </div>
    <?php  
    if ($tgl_awal==$tgl_akhir) { ?>
        <div id="title-tanggal">
            Tanggal <?php echo tgl_eng_to_ind($tgl1); ?>
        </div>
    <?php
    } else { ?>
        <div id="title-tanggal">
            Tanggal <?php echo tgl_eng_to_ind($tgl1); ?> s.d. <?php echo tgl_eng_to_ind($tgl2); ?>
        </div>
    <?php
    }
    ?>
        
        <hr><br>
        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle">No.</th>
                        <th height="20" align="center" valign="middle">Kode Transaksi</th>
                        <th height="20" align="center" valign="middle">Dasar/S.P</th>
                        <th height="20" align="center" valign="middle">Tangal</th>
                         <th height="20" align="center" valign="middle">sumber</th>
                        <th height="20" align="center" valign="middle">Kode Material</th>
                        <th height="20" align="center" valign="middle">Material</th>
                        <th height="20" align="center" valign="middle">Jenis</th>
                        <th height="20" align="center" valign="middle">Kaliber</th>
                        <th height="20" align="center" valign="middle">Negara</th>
                        <th height="20" align="center" valign="middle">Jumlah Masuk</th>
                        <th height="20" align="center" valign="middle">Stock Akhir</th>
                        <th height="20" align="center" valign="middle">Satuan</th>
                        <th height="20" align="center" valign="middle">Gudang</th>
<?php
    // jika data ada
    if($count == 0) {
        echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'></td>
                    <td width='120' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td style='padding-left:5px;' width='155' height='13' valign='middle'></td>
                    <td style='padding-right:10px;' width='100' height='13' align='right' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                </tr>";
    }
    // jika data tidak ada
    else {
        // tampilkan data
        while ($data = mysqli_fetch_assoc($query)) {
            $tanggal       = $data['tanggal_masuk'];
            $exp           = explode('-',$tanggal);
            $tanggal_masuk = $exp[2]."-".$exp[1]."-".$exp[0];

            // menampilkan isi tabel dari database ke tabel di aplikasi
            echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'>$no</td>
                    <td width='120' height='13' align='center' valign='middle'>$data[kode_transaksi]</td>
                    <td width='80' height='13' align='center' valign='middle'>$data[no_spus]</td>
                    <td width='80' height='13' align='center' valign='middle'>$tanggal_masuk</td>
                    <td width='80' height='13' align='center' valign='middle'>$data[sumber]</td>
                    <td width='80' height='13' align='center' valign='middle'>$data[kode_mat]</td>
                    <td style='padding-left:5px;' width='155' height='13' valign='middle'>$data[nama_mat]</td>
                    <td width='80' height='13' align='center' valign='middle'>$data[jenis]</td>
                    <td width='80' height='13' align='center' valign='middle'>$data[kaliber]</td>
                    <td width='80' height='13' align='center' valign='middle'>$data[negara]</td>
                    <td style='padding-right:10px;' width='100' height='13' align='right' valign='middle'>$data[jumlah_masuk]</td>
                    <td style='padding-right:10px;' width='100' height='13' align='right' valign='middle'>$data[stock_akhir]</td>
                    <td width='80' height='13' align='center' valign='middle'>$data[satuan]</td>
                    <td width='80' height='13' align='center' valign='middle'>$data[gudang]</td>
                    </tr>";
            $no++;
        }
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
                Mayor Laut (E) NRP.999999/P
            </div>
        </div>

        <!-- Script Untuk Print Laporan -->
        <script>
		window.print();
	    </script>

    </body>
</html><!-- Akhir halaman HTML yang akan di konvert -->