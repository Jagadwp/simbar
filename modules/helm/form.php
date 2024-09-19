 <?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Input Data Material Isian Gudang
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=helm"> Material </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/helm/proses.php?act=insert" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Material</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="kode_mat" data-placeholder="-- Pilih kode material yang sesuai LAPBUL --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="AMO-1">AMO-1</option>
                    <option value="AMO-2">AMO-2</option>
                    <option value="AMO-3.I.a">AMO-3.I.a</option>
                    <option value="AMO-3.I.b">AMO-3.I.b</option>
                    <option value="AMO-3.I.c">AMO-3.I.c</option>
                    <option value="AMO-3.I.d">AMO-3.I.d</option>
                    <option value="AMO-3.I.e">AMO-3.I.e</option>
                    <option value="AMO-3.I.f">AMO-3.I.f</option>
                    <option value="AMO-3.I.g">AMO-3.I.g</option>
                    <option value="AMO-3.I.h">AMO-3.I.h</option>
                    <option value="AMO-3.I.i">AMO-3.I.i</option>
                    <option value="AMO-3.I.j">AMO-3.I.j</option>
                    <option value="AMO-3.I.k">AMO-3.I.k</option>
                    <option value="AMO-3.I.l">AMO-3.I.l</option>
                    <option value="AMO-3.I.m">AMO-3.I.m</option>
                    <option value="AMO-3.I.n">AMO-3.I.n</option>
                    <option value="AMO-3.I.o">AMO-3.I.o</option>
                    <option value="AMO-3.I.p">AMO-3.I.p</option>
                    <option value="AMO-3.I.q">AMO-3.I.q</option>
                    <option value="AMO-3.I.r">AMO-3.I.r</option>
                    <option value="AMO-3.I.s">AMO-3.I.s</option>
                    <option value="AMO-3.I.t">AMO-3.I.t</option>
                    <option value="AMO-3.I.u">AMO-3.I.u</option>
                    <option value="AMO-3.II.a.1">AMO-3.II.a.1</option>
                    <option value="AMO-3.II.a.2">AMO-3.II.a.2</option>
                    <option value="AMO-3.II.b">AMO-3.II.b</option>
                    <option value="AMO-4.a">AMO-4.a</option>
                    <option value="AMO-4.b">AMO-4.b</option>
                    <option value="AMO-5.I">AMO-5.I</option>
                    <option value="AMO-5.II.a">AMO-5.II.a</option>
                    <option value="AMO-5.II.b">AMO-5.II.b</option>
                    <option value="AMO-5.II.c">AMO-5.II.c</option>
                    <option value="AMO-5.II.d">AMO-5.II.d</option>
                    <option value="AMO-5.II.e">AMO-5.II.e</option>
                    <option value="AMO-5.II.f">AMO-5.II.f</option>
                    <option value="AMO-5.II.g">AMO-5.II.g</option>
                    <option value="AMO-5.II.h">AMO-5.II.h</option>
                    <option value="AMO-5.III.a">AMO-5.III.a</option>
                    <option value="AMO-5.III.b">AMO-5.III.b</option>
                    <option value="AMO-5.III.c">AMO-5.III.c</option>
                    <option value="AMO-5.III.d">AMO-5.III.d</option>
                    <option value="AMO-5.III.e">AMO-5.III.e</option>
                    <option value="AMO-5.III.f">AMO-5.III.f</option>
                    <option value="AMO-5.III.g">AMO-5.III.g</option>
                    <option value="AMO-5.III.h">AMO-5.III.h</option>
                    <option value="AMO-5.III.i">AMO-5.III.i</option>
                    <option value="AMO-5.III.j">AMO-5.III.j</option>
                    <option value="AMO-5.III.k">AMO-5.III.k</option>
                    <option value="AMO-5.III.l">AMO-5.III.l</option>
                    <option value="AMO-5.III.m">AMO-5.III.m</option>
                    <option value="AMO-5.III.n">AMO-5.III.n</option>
                    <option value="AMO-5.III.o">AMO-5.III.o</option>
                    <option value="AMO-5.III.p">AMO-5.III.p</option>
                    <option value="AMO-5.III.q">AMO-5.III.q/option>
                    <option value="AMO-5.III.r">AMO-5.III.r</option>
                    <option value="AMO-5.III.s">AMO-5.III.s</option>
                    <option value="AMO-5.III.t">AMO-5.III.t</option>
                    <option value="AMO-5.III.u">AMO-5.III.u</option>
                    <option value="AMO-5.IV.a">AMO-5.IV.a</option>
                    <option value="AMO-5.IV.b">AMO-5.IV.b</option>
                    <option value="AMO-5.IV.c">AMO-5.IV.c</option>
                    <option value="AMO-5.V.a">AMO-5.V.a</option>
                    <option value="AMO-5.V.b">AMO-5.V.b</option>
                    <option value="AMO-5.V.c">AMO-5.V.c</option>
                    <option value="AMO-5.V.d">AMO-5.V.d</option>
                    <option value="AMO-5.V.e">AMO-5.V.e</option>
                    <option value="AMO-5.V.f">AMO-5.V.f</option>
                    <option value="AMO-5.V.g">AMO-5.V.g</option>
                    <option value="AMO-6.a">AMO-6.a</option>
                    <option value="AMO-6.b">AMO-6.b</option>
                    <option value="AMO-6.c">AMO-6.c</option>
                    <option value="AMO-7">AMO-7</option>
                    <option value="AMO-8.a">AMO-8.a</option>
                    <option value="AMO-8.b">AMO-8.b</option>
                    <option value="AMO-8.c">AMO-8.c</option>
                    <option value="AMO-9.I.a">AMO-9.I.a</option>
                     <option value="AMO-9.I.b">AMO-9.I.b</option>
                      <option value="AMO-9.I.c">AMO-9.I.c</option>
                    <option value="AMO-9.II">AMO-9.II</option>
                     <option value="AMO-9.III.a">AMO-9.III.a</option>
                      <option value="AMO-9.III.b">AMO-9.III.b</option>
                       <option value="AMO-9.III.c">AMO-9.III.c</option>
                        <option value="AMO-9.III.d">AMO-9.III.d</option>
                         <option value="AMO-9.III.e">AMO-9.III.e</option>
                    <option value="AMO-9.III.f">AMO-9.III.f</option>
                    <option value="AMO-9.III.g">AMO-9.III.g</option>
                    <option value="AMO-9.III.h">AMO-9.III.h</option>
                    <option value="AMO-9.III.i">AMO-9.III.i</option>
                    <option value="AMO-9.III.j">AMO-9.III.j</option>
                    <option value="AMO-9.III.k">AMO-9.III.k</option>
                    <option value="AMO-9.III.l">AMO-9.III.l</option>
                    <option value="AMO-9.III.m">AMO-9.III.m</option>
                    <option value="AMO-9.III.n">AMO-9.III.n</option>
                    <option value="AMO-9.III.o">AMO-9.III.o</option>
                    <option value="AMO-9.III.p">AMO-9.III.p</option>
                    <option value="AMO-9.III.q">AMO-9.III.q</option>
                    <option value="AMO-9.III.r">AMO-9.III.r</option>
                    <option value="AMO-9.III.s">AMO-9.III.s</option>
                    <option value="AMO-9.III.t">AMO-9.III.t</option>
                    <option value="AMO-10.I.a">AMO-10.I.a</option>
                     <option value="AMO-10.I.b">AMO-10.I.b</option>
                      <option value="AMO-10.I.c">AMO-10.I.c</option>
                       <option value="AMO-10.I.d">AMO-10.I.d</option>
                        <option value="AMO-11.I.a">AMO-11.I.a</option>
                         <option value="AMO-11.I.b">AMO-11.I.b</option>
                          <option value="AMO-11.I.c">AMO-11.I.c</option>
                           <option value="AMO-11.I.d">AMO-11.I.d</option>
                            <option value="AMO-11.I.e">AMO-11.I.e</option>
                             <option value="AMO-11.I.f">AMO-11.I.f</option>
                              <option value="AMO-11.I.g">AMO-11.I.g</option>
                    <option value="AMO-11.I.h">AMO-11.I.h</option>
                    <option value="AMO-11.I.i">AMO-11.I.i</option>
                    <option value="AMO-11.I.j">AMO-11.I.j</option>
                    <option value="AMO-11.I.k">AMO-11.I.k</option>
                    <option value="AMO-11.I.l">AMO-11.I.l</option>
                    <option value="AMO-11.I.m">AMO-11.I.m</option>
                    <option value="AMO-11.I.n">AMO-11.I.n</option>
                    <option value="AMO-11.II.a">AMO-11.II.a</option>
                    <option value="AMO-11.II.b">AMO-11.II.b</option>
                    <option value="AMO-11.II.c">AMO-11.II.c</option>
                    <option value="AMO-11.II.d">AMO-11.II.d</option>
                    <option value="AMO-11.II.e">AMO-11.II.e</option>
                    <option value="AMO-11.II.f">AMO-11.II.f</option>
                    <option value="AMO-11.III.">AMO-11.III.</option>
                    <option value="AMO-12">AMO-12</option>
                    <option value="AMO-13.I.a">AMO-13.I.a</option>
                    <option value="AMO-13.I.b">AMO-13.I.b</option>
                    <option value="AMO-13.II">AMO-13.II</option>
                    <option value="AMO-14.I.a">AMO-14.I.a</option>
                    <option value="AMO-14.I.b">AMO-14.I.b</option>
                    <option value="AMO-14.II.a">AMO-14.II.a</option>
                    <option value="AMO-14.II.b">AMO-14.II.b</option>
                    <option value="AMO-14.II.c">AMO-14.II.c</option>
                    <option value="AMO-14.II.d">AMO-14.II.d</option>
                    <option value="AMO-14.II.e">AMO-14.II.e</option>
                    <option value="AMO-14.II.f">AMO-14.II.f</option>
                    <option value="AMO-14.II.g">AMO-14.II.g</option>
                    <option value="AMO-14.II.h">AMO-14.II.h</option>
                    <option value="AMO-14.III.a">AMO-14.III.a</option>
                    <option value="AMO-14.III.b">AMO-14.III.b</option>
                    <option value="AMO-14.III.c">AMO-14.III.c</option>
                    <option value="AMO-14.III.d">AMO-14.III.d</option>
                    <option value="AMO-14.III.e">AMO-14.III.e</option>
                    <option value="AMO-14.III.f">AMO-14.III.f</option>
                    <option value="AMO-14.III.g">AMO-14.III.g</option>
                    <option value="AMO-14.III.h">AMO-14.III.h</option>
                    <option value="AMO-14.III.i">AMO-14.III.i</option>
                    <option value="AMO-14.III.j">AMO-14.III.j</option>
                    <option value="AMO-14.III.k">AMO-14.III.k</option>
                    <option value="AMO-14.IV.a">AMO-14.IV.a</option>
                    <option value="AMO-14.IV.b">AMO-14.IV.b</option>
                    <option value="AMO-14.IV.c">AMO-14.IV.c</option>
                    <option value="AMO-14.IV.d">AMO-14.IV.d</option>
                    <option value="AMO-14.V.a">AMO-14.V.a</option>
                    <option value="AMO-14.V.b">AMO-14.V.b</option>
                    <option value="AMO-14.VI.a">AMO-14.VI.a</option>
                    <option value="AMO-14.VI.b">AMO-14.VI.b</option>
                    <option value="AMO-14.VI.c">AMO-14.VI.c</option>
                    <option value="AMO-14.VI.d">AMO-14.VI.d</option>
                    <option value="AMO-14.VI.e">AMO-14.VI.e</option>
                    <option value="AMO-14.VI.f">AMO-14.VI.f</option>
                    <option value="AMO-14.VI.g">AMO-14.VI.g</option>
                    <option value="AMO-14.VI.h">AMO-14.VI.h</option>
                    <option value="AMO-14.VI.i">AMO-14.VI.i</option>
                    <option value="AMO-14.VI.j">AMO-14.VI.j</option>
                    <option value="AMO-14.VI.k">AMO-14.VI.k</option>
                    <option value="AMO-14.VI.l">AMO-14.VI.l</option>
                    <option value="AMO-14.VI.m">AMO-14.VI.m</option>
                    <option value="AMO-14.VII.a">AMO-14.VII.a</option>
                    <option value="AMO-14.VII.b">AMO-14.VII.b</option>
                    <option value="AMO-14.VII.c">AMO-14.VII.c</option>
                    <option value="AMO-14.VII.d">AMO-14.VII.d</option>
                    <option value="AMO-14.VII.e">AMO-14.VII.e</option>
                    <option value="AMO-14.VII.f">AMO-14.VII.f</option>

                    </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Material</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="nama_mat" data-placeholder="-- Pilih nama material / barang --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="Amunisi">Amunisi</option>
                    <option value="Bom Laut">Bom Laut</option>
                    <option value="Detonator">Detonator</option>
                    <option value="Exploder">Exploder</option>
                    <option value="Mortir">Mortir</option>
                    <option value="High Explosive">High Explosive</option>
                    <option value="Low Explosive">Low Explosive</option>
                    <option value="Sumbu Api dan Ledak">Sumbu Api dan Ledak</option>
                    <option value="Suku Cadang">Suku Cadang</option>
                    <option value="Rocket">Rocket</option>
                    <option value="Rudal">Rudal</option>
                    <option value="Hand Granade">Hand Granade</option>
                    <option value="Rifle Granade">Rifle Granade</option>
                    <option value="Louncher Granade">Louncher Granade</option>
                    <option value="Phyrotecnik">Phyrotecnik</option>
                    <option value="Ranjau">Ranjau Laut</option>
                    <option value="Smart Mine">Ranjau Smart Mine</option>
                    </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="jenis" data-placeholder="-- Pilih Jenis --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="----">----</option>
                    <option value="API">API</option>
                    <option value="APIT">APIT</option>
                    <option value="APT">APT</option>
                    <option value="APDS">APDS</option>
                    <option value="APC-T W/LINK">APC-T W/LINK</option>
                    <option value="APT(3YPG6)">APT(3YPG6)</option>
                    <option value="APIT/HVAPT in LINK">APIT/HVAPT in LINK</option>
                    <option value="APIT in LINK">APIT in LINK</option>
                    <option value="API+APIT in LINK">API+APIT in LINK</option>
                    <option value="AMPIBHIUS SPA">AMPIBHIUS SPA</option>
                    <option value="Ball">Ball</option>
                    <option value="Ball in Clip">Ball in Clip</option>
                    <option value="Ball in Carton M-80">Ball in Carton M-80</option>
                    <option value="Ball AK-47">Ball AK-47</option>
                    <option value="Ball(UWA/APS)">Ball(UWA/APS)</option>
                    <option value="Ball MI-911">Ball MI-911</option>
                    <option value="BROWNING">BROWNING</option>
                    <option value="CUT WAY">CUT WAY</option>
                    <option value="DUMMY">DUMMY</option>
                    <option value="FMJ 55 Grain">FMJ 55 Grain</option>
                    <option value="FIOCCHI 12GA DMMLT">FIOCCHI 12GA DMLT</option>
                    <option value="FIOCCHI 12GA B/S">FIOCCHI 12GA B/S</option>
                    <option value="FIOCCHI FMJ">FIOCCHI FMJ</option>
                    <option value="HE">HE</option>
                    <option value="HE-FI">HE-FI</option>
                    <option value="HE-FT">HE-FT</option>
                    <option value="HE-TPT(BUP2)">HE-TPT(BUP2)</option>
                    <option value="HE(2A42)">HE(2A42)</option>
                    <option value="HEI">HEI</option>
                    <option value="HEI(3UOF8)">HEI(3UOF8)</option>
                    <option value="HEIT">HEIT</option>
                    <option value="HEIT/SD">HEIT/SD</option>
                    <option value="HEIT(2A42/2A72)">HEIT(2A42/2A72)</option>
                    <option value="HEIT BMP-3F">HEIT BMP-3F</option>
                    <option value="HEIT iN LINK">HEIT in LINK</option>
                    <option value="HET (MK2)">HET (MK2)</option>
                    <option value="HET(BVP-2)">HET(BVP-2)</option>
                    <option value="HET(BUP-2)">HET(BUP-2)</option>
                    <option value="HET(BVP-2,2A42)">HET(BVP-2,2A42)</option>
                    <option value="HVAPDS-T">HVAPDS-T</option>
                    <option value="HAMPA">HAMPA</option>
                    <option value="HAMPA AK-47">HAMPA AK-47</option>
                    <option value="LRN">LRN</option>
                    <option value="MU-2TJ">MU-2TJ</option>
                    <option value="MU2-M A2">MU2-M A2</option>
                    <option value="MU-4TJ">MU-4TJ</option>
                    <option value="MU-5TJ">MU-5TJ</option>
                    <option value="MU-8TJ">MU-8TJ</option>
                    <option value="MU-8K">MU-8K</option>
                    <option value="MU-8H">MU-8H</option>
                    <option value="MU-5TJ LINK">MU-5TJ LINK</option>
                    <option value="MU-5H">MU-5H</option>
                    <option value="MU-5DK">MU-5DK</option>
                    <option value="MU-5HPBT A1">MU-5HPBT A1</option>
                    <option value="MU-5N">MU-5N</option>
                    <option value="MU-5M">MU5-M</option>
                    <option value="MU5-M A1">MU5-M A1 </option>
                    <option value="MU5-M A2">MU5-M A2 </option>
                    <option value="MU5-S">MU5-S</option>
                    <option value="Sniper">Sniper</option>
                    <option value="4MU-5TJ.1MU-5N">4MU-5TJ.1MU-5N</option>
                    <option value="4MU-5TJ.1MU-5N">4MU-2TJ.1MU-2N</option>
                    <option value="M-193">M-193</option>
                    <option value="TRACER M-196">TRACER M-196</option>
                    <option value="M-200">M-200</option>
                    <option value="SS-109 FNC">SS-109 FNC</option>
                    <option value="Karet">Karet</option>
                    <option value="Kayu">Kayu</option>
                    <option value="PRACTICE">PRACTICE</option>
                    <option value="SAPHEI">SAPHEI</option>
                    <option value="SAPHEI in LINK">SAPHEI in LINK</option>
                    <option value="TJ">TJ</option>
                    <option value="TP">TP</option>
                    <option value="TP-T">TP-T</option>
                    <option value="TP-T in LINK">TP-T in LINK</option>
                    <option value="TP-T/KAA">TP-T/KAA</option>
                    <option value="Round Man Marker">Round man Marker</option>
                    </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Kaliber</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="kaliber" data-placeholder="-- Pilih Kaliber --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="----">----</option>
                    <option value="4,5 mm">4,5 mm</option>
                    <option value="5,56x39 mm">5,56x39 mm</option>
                    <option value="5,56x45 mm">5,56x45 mm</option>
                    <option value="5,58x15 mm">5,58x15 mm</option>
                    <option value="6,35 mm">6,35 mm</option>
                    <option value="6,35x15 mm">6,35x15 mm</option>
                    <option value="7,62 mm">7,62 mm</option>
                    <option value="7,62x24 mm">7,62x24 mm</option>
                    <option value="7,62x39 mm">7,62x39 mm</option>
                    <option value="7,62x51 mm">7,62x51 mm</option>
                    <option value="7,62x54 mm">7,62x54 mm</option>
                    <option value="7,62x63 mm">7,62x63 mm</option>
                    <option value="7,65x17 mm">7,65x17 mm</option>
                    <option value="7,65x23 mm">7,65x23 mm</option>
                    <option value="7,94x51 mm">7,94x51 mm</option>
                    <option value="8,6x70 mm">8,6x70 mm</option>
                    <option value="9 mm">9 mm</option>
                    <option value="9x17 mm">9x17 mm</option>
                    <option value="9x18 mm">9x18 mm</option>
                    <option value="9x19 mm">9x19 mm</option>
                    <option value="9,65x29 mm">9,65x29 mm</option>
                    <option value="12,7 mm">12,7 mm</option>
                    <option value="12,7x99 mm">12,7x99 mm</option>
                    <option value="12,7x107 mm">12,7x107 mm</option>
                    <option value="14,5x114 mm">14,5x114 mm</option>
                    <option value="18,5x70 mm">18,5x70 mm</option>
                    <option value="18,5x76 mm">18,5x76 mm</option>
                    <option value="20x82 mm">20x82 mm</option>
                    <option value="20x110 mm">20x110 mm</option>
                    <option value="20x128 mm">20x128 mm</option>
                    <option value="20x139 mm">20x139 mm</option>
                    <option value="25x219 mm">25x219 mm</option>
                    <option value="30x165 mm">30x165 mm</option>
                    <option value="30x170 mm">30x170 mm</option>
                    <option value="30x173 mm">30x173 mm</option>
                    <option value="30x210 mm">30x210 mm</option>
                    <option value="35x228 mm">35x228 mm</option>
                    <option value="37x250 mm">37x250 mm</option>
                    <option value="40x310 mm">40x310 mm</option>
                    <option value="40x311 mm">40x311 mm</option>
                    <option value="40x368 mm">40x368 mm</option>
                    <option value="57x347 mm">57x347 mm</option>
                    <option value="57x348 mm">57x348 mm</option>
                    <option value="57x436 mm">57x436 mm</option>
                    <option value="76,2x635 mm">76,2x635 mm</option>
                    <option value="90 mm">90 mm</option>
                    <option value="100x106 mm">100x106 mm</option>
                    <option value="105 mm">105 mm</option>
                    <option value="120x612 mm">120x612 mm</option>
                    <option value="122x284 mm">122x284 mm</option>
                    <option value="60x349 mm">60x349 mm</option>
                    <option value="22 mm">22 mm</option>
                    <option value="81x490 mm">81x490 mm</option>
                    <option value="25,4x55 mm">25,4x55 mm</option>
                    <option value="100-56 mm">100-56 mm</option>
                    <option value="40">40</option>
                    <option value="40/60">40/60</option>
                    <option value="40/65">40/65</option>
                    <option value="40/73">40/73</option>
                    <option value="40/75">40/75</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nomor Lot</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="no_lot" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Negara</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="negara" data-placeholder="-- Pilih Negara --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="----">----</option>
                    <option value="Amerika">Amerika</option>
                    <option value="Afsel">Afsel</option>
                    <option value="Australia">Australia</option>
                    <option value="Belgia">Belgia</option>
                    <option value="Brunai">Brunai</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Belanda">Belanda</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="China">China</option>
                    <option value="Checna">Checna</option>
                    <option value="Cekoslovakia">Cekoslovakia</option>
                    <option value="Croasia">Croasia</option>
                    <option value="Philipina">Philipina</option>
                    <option value="Finlandia">Finlandia</option>
                    <option value="Inggris">Inggris</option>
                    <option value="Korea">Korea</option>
                    <option value="Italia">Italia</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Jerman">Jerman</option>
                    <option value="Prancis">Prancis</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Rusia">Rusia</option>
                    <option value="RRT">RRT</option>
                    <option value="Spanyol">Spanyol</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Ukraina">Ukraina</option>
                    <option value="Swedia">Swedia</option>
                    <option value="Swis">Swis</option>
                    <option value="Turki">Turki</option>
                    <option value="Yugoslavia">Yugoslavia</option>
                  </select>
                </div>
              </div>

             <div class="form-group">
                <label class="col-sm-2 control-label">Kondisi Tidak Siap</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tidak_siap" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Kondisi Siap</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="siap" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Jumlah Stock Akhir</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="stock_akhir" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Satuan</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="satuan" data-placeholder="-- Pilih Satuan --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="Butir">Butir</option>
                    <option value="Buah">Buah</option>
                    <option value="Biji">Biji</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Pucuk">Pucuk</option>
                    <option value="Unit">Unit</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Deret</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="deret" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Lokasi Gudang</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="gudang" data-placeholder="-- Pilih Lokasi Gudang Penyimpanan --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="GD.03/T">GD.03/T</option>
                    <option value="GD.04/G">GD.04/G</option>
                    <option value="GD.05/SP">GD.05/SP</option>
                    <option value="GD.06/G">GD.06/G</option>
                    <option value="GD.07/P">GD.07/P</option>
                    <option value="GD.08/P">GD.08/P</option>
                    <option value="GD.09/G">GD.09/G</option>
                    <option value="GD.10/G">GD.10/G</option>
                    <option value="GD.11/G">GD.11/G</option>
                    <option value="GD.12/SP">GD.12/SP</option>
                    <option value="GD.13/SP">GD.13/SP</option>
                    <option value="GD.14/SP">GD.14/SP</option>
                    <option value="GD.15/G">GD.15/G</option>
                    <option value="GD.16/G">GD.16/G</option>
                    <option value="GD.17/P">GD.17/P</option>
                    <option value="GD.18/P">GD.18/P</option>
                    <option value="GD.19/P">GD.19/P</option>
                    <option value="GD.20/P">GD.20/P</option>
                    <option value="GD.21/G">GD.21/G</option>
                    <option value="GD.22/SP">GD.22/SP</option>
                    <option value="GD.23/P">GD.23/P</option>
                    <option value="GD.24/P">GD.24/P</option>
                    <option value="GD.25/P">GD.25/P</option>
                    <option value="GD.26/P">GD.26/P</option>
                    <option value="GD.27/P">GD.27/P</option>
                    <option value="GD.28/P">GD.28/P</option>
                    <option value="GD.29/SP">GD.29/SP</option>
                    <option value="GD.30/P">GD.30/P</option>
                    <option value="GD.31/SP">GD.31/SP</option>
                    <option value="GD.32/T">GD.32/T</option>
                    <option value="GD.33/P">GD.33/P</option>
                    <option value="GD.34/P">GD.34/P</option>
                    <option value="GD.35/P">GD.35/P</option>
                    <option value="GD.36/P">GD.36/P</option>
                    <option value="GD.37/P">GD.37/P</option>
                    <option value="GD.38/P">GD.38/P</option>
                    <option value="GD.39/P">GD.39/P</option>
                    <option value="GD.40/P">GD.40/P</option>
                    <option value="GD.41/P">GD.41/P</option>
                    <option value="GD.42/P">GD.42/P</option>
                    <option value="GD.43/P">GD.43/P</option>
                    <option value="GD.44/P">GD.44/P</option>
                    <option value="GD.45/P">GD.45/P</option>
                    <option value="GD.46/P">GD.46/P</option>
                    <option value="GD.47/SP">GD.47/SP</option>
                    <option value="GD.48/SP">GD.48/SP</option>
                    <option value="GD.49/SP">GD.49/SP</option>
                    <option value="GD.50/SP">GD.50/SP</option> 
                    <option value="GD.51/SP">GD.51/SP</option>
                    <option value="GD.52/SP">GD.52/SP</option>
                    <option value="GD.53/SP">GD.53/SP</option>
                    <option value="GD.54/SP">GD.54/SP</option>
                    <option value="GD.55/SP">GD.55/SP</option>
                    <option value="GD.56/SP">GD.56/SP</option>
                    <option value="GD.57/SP">GD.57/SP</option>
                    <option value="GD.58/SP">GD.58/SP</option>
                    <option value="GD.59/SP">GD.59/SP</option>
                    <option value="GD.60/SP">GD.60/SP</option> 
                    <option value="GD.61/SP">GD.61/SP</option>
                    <option value="GD.62/SP">GD.62/SP</option>
                    <option value="GD.63/SP">GD.63/SP</option>
                    <option value="GD.64/P">GD.64/P</option>
                    <option value="GD.65/SP">GD.65/SP</option>
                    <option value="GD.66/P">GD.66/P</option>
                    <option value="GD.67/SP">GD.67/SP</option>
                    <option value="GD.68/SP">GD.68/SP</option>
                    <option value="GD.69/P">GD.69/P</option>
                    <option value="GD.71/SP">GD.71/SP</option>
                    <option value="GD.72/SP">GD.72/SP</option>
                    <option value="GD.73/SP">GD.73/SP</option>
                    <option value="GD.74/T">GD.74/T</option>
                    <option value="GD.75/SP">GD.75/SP</option>
                    <option value="GD.76/SP">GD.76/SP</option>
                    <option value="GD.77/SP">GD.77/SP</option>
                    <option value="GD.78/SP">GD.78/SP</option>
                    <option value="GD.79/P">GD.79/P</option>
                    <option value="GD.80/SP">GD.80/SP</option>
                    <option value="GD.81/T">GD.81/T</option>
                    <option value="GD.82/SP">GD.82/SP</option>
                    <option value="GD.83/SP">GD.83/SP</option>
                    <option value="GD.84/SP">GD.84/S</option>
                    <option value="GD.85/P">GD.85/P</option>
                    <option value="GD.86/SP">GD.86/SP</option>
                    <option value="GD.87/T">GD.87/T</option>
                    <option value="GD.88/T">GD.88/T</option>
                    <option value="GD.89/SP">GD.89/SP</option>
                    <option value="GD.90/SP">GD.90/SP</option>
                    <option value="GD.91/SP">GD.91/SP</option>
                    <option value="GD.92/SP">GD.92/SP</option>
                    <option value="GD.93/SP">GD.93/SP</option>
                    <option value="GD.94/SP">GD.94/SP</option>
                    <option value="GD.95/SP">GD.95/SP</option>
                    <option value="GD.96/T">GD.96/T</option>
                    <option value="GD.97/G">GD.97/G</option>
                    <option value="GD.98/G">GD.98/G</option>
                    <option value="GD.99/P">GD.99/P</option>
                    <option value="GD.100/P">GD.100/P</option>
                    <option value="GD.101/P">GD.101/P</option>
                    <option value="GD.102/T">GD.102/T</option>
                    <option value="GD.103/P">GD.103/P</option>
                    <option value="GD.104/G">GD.104/G</option>
                    <option value="GD.105/P">GD.105/P</option>
                    <option value="GD.106/P">GD.106/P</option>
                    <option value="GD.107/P">GD.107/P</option>
                    <option value="GD.108/P">GD.108/P</option>
                    <option value="GD.109/G">GD.109/G</option>
                    <option value="GD.110/G">GD.110/G</option>
                    <option value="GD.111/G">GD.111/G</option>
                    <option value="GD.112/G">GD.112/G</option>
                    <option value="GD.113/G">GD.113/G</option>
                    <option value="GD.114/G">GD.114/G</option>
                    <option value="GD.115/SP">GD.115/SP</option>
                    <option value="GD.116/SP">GD.116/SP</option>
                    <option value="GD.117/SP">GD.117/SP</option>
                    <option value="GD.118/P">GD.118/P</option>
                    </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Gambar</label>
                <div class="col-sm-5">
                  <input type="file" name="gambar">
                  <br/>
                
                <?php  
                if (!isset($data['gambar'])) { ?>
                  <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/gambar/contoh-amocil.png" width="60">
                <?php
                }
                
                else { ?>
                  <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/gambar/<?php echo $data['gambar']; ?>" width="60">
                <?php
                }
                ?>
                </div>
              </div>

            </div><!-- /.box body -->
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=helm" class="btn btn-default btn-reset">Batal</a>
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
// jika form edit data yang dipilih
// isset : cek data ada / tidak
elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {
      // fungsi query untuk menampilkan data dari tabel obat
      $query = mysqli_query($mysqli, "SELECT id_helm,kode_mat,nama_mat,jenis,kaliber,negara,tidak_siap,siap,stock_akhir,satuan,gudang,gambar FROM is_helm WHERE id_helm='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil Data obat : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form edit data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Ubah Data Material Isian Gudang
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=helm"> Material </a></li>
      <li class="active"> Ubah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/helm/proses.php?act=update" method="POST">
            <div class="box-body">
            <input type="hidden" id="id_helm" name="id_helm" value="<?php echo $data['id_helm']; ?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Material</label>
                <div class="col-sm-5">
      <input type="text" class="form-control" name="kode_mat" value="<?php echo $data['kode_mat']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Material</label>
                <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_mat" value="<?php echo $data['nama_mat']; ?>" readonly required>          </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis</label>
                <div class="col-sm-5">
      <input type="text" class="form-control" name="jenis" value="<?php echo $data['jenis']; ?>" readonly required>          
                </div>
              </div>
              

              <div class="form-group">
                <label class="col-sm-2 control-label">Kaliber</label>
                <div class="col-sm-5">
      <input type="text" class="form-control" name="kaliber" value="<?php echo $data['kaliber']; ?>" readonly required>            
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Negara</label>
                <div class="col-sm-5">
      <input type="text" class="form-control" name="negara" value="<?php echo $data['negara']; ?>" readonly required>            
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nomor Lot</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="no_lot" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Kondisi Tidak Siap</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tidak_siap" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Kondisi Siap</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="siap" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Jumlah Stock Akhir</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="stock_akhir" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Satuan</label>
                <div class="col-sm-5">
      <input type="text" class="form-control" name="satuan" value="<?php echo $data['satuan']; ?>" readonly required>            
                </div>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Deret</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="deret" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Lokasi Gudang</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="gudang" data-placeholder="-- Pilih Perubahan Lokasi Gudang Penyimpanan --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="GD.03/T">GD.03/T</option>
                    <option value="GD.04/G">GD.04/G</option>
                    <option value="GD.05/SP">GD.05/SP</option>
                    <option value="GD.06/G">GD.06/G</option>
                    <option value="GD.07/P">GD.07/P</option>
                    <option value="GD.08/P">GD.08/P</option>
                    <option value="GD.09/G">GD.09/G</option>
                    <option value="GD.10/G">GD.10/G</option>
                    <option value="GD.11/G">GD.11/G</option>
                    <option value="GD.12/SP">GD.12/SP</option>
                    <option value="GD.13/SP">GD.13/SP</option>
                    <option value="GD.14/SP">GD.14/SP</option>
                    <option value="GD.15/G">GD.15/G</option>
                    <option value="GD.16/G">GD.16/G</option>
                    <option value="GD.17/P">GD.17/P</option>
                    <option value="GD.18/P">GD.18/P</option>
                    <option value="GD.19/P">GD.19/P</option>
                    <option value="GD.20/P">GD.20/P</option>
                    <option value="GD.21/G">GD.21/G</option>
                    <option value="GD.22/SP">GD.22/SP</option>
                    <option value="GD.23/P">GD.23/P</option>
                    <option value="GD.24/P">GD.24/P</option>
                    <option value="GD.25/P">GD.25/P</option>
                    <option value="GD.26/P">GD.26/P</option>
                    <option value="GD.27/P">GD.27/P</option>
                    <option value="GD.28/P">GD.28/P</option>
                    <option value="GD.29/SP">GD.29/SP</option>
                    <option value="GD.30/P">GD.30/P</option>
                    <option value="GD.31/SP">GD.31/SP</option>
                    <option value="GD.32/T">GD.32/T</option>
                    <option value="GD.33/P">GD.33/P</option>
                    <option value="GD.34/P">GD.34/P</option>
                    <option value="GD.35/P">GD.35/P</option>
                    <option value="GD.36/P">GD.36/P</option>
                    <option value="GD.37/P">GD.37/P</option>
                    <option value="GD.38/P">GD.38/P</option>
                    <option value="GD.39/P">GD.39/P</option>
                    <option value="GD.40/P">GD.40/P</option>
                    <option value="GD.41/P">GD.41/P</option>
                    <option value="GD.42/P">GD.42/P</option>
                    <option value="GD.43/P">GD.43/P</option>
                    <option value="GD.44/P">GD.44/P</option>
                    <option value="GD.45/P">GD.45/P</option>
                    <option value="GD.46/P">GD.46/P</option>
                    <option value="GD.47/SP">GD.47/SP</option>
                    <option value="GD.48/SP">GD.48/SP</option>
                    <option value="GD.49/SP">GD.49/SP</option>
                    <option value="GD.50/SP">GD.50/SP</option> 
                    <option value="GD.51/SP">GD.51/SP</option>
                    <option value="GD.52/SP">GD.52/SP</option>
                    <option value="GD.53/SP">GD.53/SP</option>
                    <option value="GD.54/SP">GD.54/SP</option>
                    <option value="GD.55/SP">GD.55/SP</option>
                    <option value="GD.56/SP">GD.56/SP</option>
                    <option value="GD.57/SP">GD.57/SP</option>
                    <option value="GD.58/SP">GD.58/SP</option>
                    <option value="GD.59/SP">GD.59/SP</option>
                    <option value="GD.60/SP">GD.60/SP</option> 
                    <option value="GD.61/SP">GD.61/SP</option>
                    <option value="GD.62/SP">GD.62/SP</option>
                    <option value="GD.63/SP">GD.63/SP</option>
                    <option value="GD.64/P">GD.64/P</option>
                    <option value="GD.65/SP">GD.65/SP</option>
                    <option value="GD.66/P">GD.66/P</option>
                    <option value="GD.67/SP">GD.67/SP</option>
                    <option value="GD.68/SP">GD.68/SP</option>
                    <option value="GD.69/P">GD.69/P</option>
                    <option value="GD.71/SP">GD.71/SP</option>
                    <option value="GD.72/SP">GD.72/SP</option>
                    <option value="GD.73/SP">GD.73/SP</option>
                    <option value="GD.74/T">GD.74/T</option>
                    <option value="GD.75/SP">GD.75/SP</option>
                    <option value="GD.76/SP">GD.76/SP</option>
                    <option value="GD.77/SP">GD.77/SP</option>
                    <option value="GD.78/SP">GD.78/SP</option>
                    <option value="GD.79/P">GD.79/P</option>
                    <option value="GD.80/SP">GD.80/SP</option>
                    <option value="GD.81/T">GD.81/T</option>
                    <option value="GD.82/SP">GD.82/SP</option>
                    <option value="GD.83/SP">GD.83/SP</option>
                    <option value="GD.84/SP">GD.84/S</option>
                    <option value="GD.85/P">GD.85/P</option>
                    <option value="GD.86/SP">GD.86/SP</option>
                    <option value="GD.87/T">GD.87/T</option>
                    <option value="GD.88/T">GD.88/T</option>
                    <option value="GD.89/SP">GD.89/SP</option>
                    <option value="GD.90/SP">GD.90/SP</option>
                    <option value="GD.91/SP">GD.91/SP</option>
                    <option value="GD.92/SP">GD.92/SP</option>
                    <option value="GD.93/SP">GD.93/SP</option>
                    <option value="GD.94/SP">GD.94/SP</option>
                    <option value="GD.95/SP">GD.95/SP</option>
                    <option value="GD.96/T">GD.96/T</option>
                    <option value="GD.97/G">GD.97/G</option>
                    <option value="GD.98/G">GD.98/G</option>
                    <option value="GD.99/P">GD.99/P</option>
                    <option value="GD.100/P">GD.100/P</option>
                    <option value="GD.101/P">GD.101/P</option>
                    <option value="GD.102/T">GD.102/T</option>
                    <option value="GD.103/P">GD.103/P</option>
                    <option value="GD.104/G">GD.104/G</option>
                    <option value="GD.105/P">GD.105/P</option>
                    <option value="GD.106/P">GD.106/P</option>
                    <option value="GD.107/P">GD.107/P</option>
                    <option value="GD.108/P">GD.108/P</option>
                    <option value="GD.109/G">GD.109/G</option>
                    <option value="GD.110/G">GD.110/G</option>
                    <option value="GD.111/G">GD.111/G</option>
                    <option value="GD.112/G">GD.112/G</option>
                    <option value="GD.113/G">GD.113/G</option>
                    <option value="GD.114/G">GD.114/G</option>
                    <option value="GD.115/SP">GD.115/SP</option>
                    <option value="GD.116/SP">GD.116/SP</option>
                    <option value="GD.117/SP">GD.117/SP</option>
                    <option value="GD.118/P">GD.118/P</option>
                    </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Gambar</label>
                <div class="col-sm-5">
                  <input type="file" name="gambar">
                  <br/>
                <?php  
                if ($data['gambar']=="") { ?>
                  <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/gambar/contoh-amocil.png" width="60">
                <?php
                }
                else { ?>
                  <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/user/<?php echo $data['gambar']; ?>" width="60" >
                <?php
                }
                ?>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=helm" class="btn btn-default btn-reset">Batal</a>
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