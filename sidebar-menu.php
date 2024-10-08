<?php 
// fungsi pengecekan level untuk menampilkan menu sesuai dengan hak akses
// jika hak akses = Super Admin, tampilkan menu
if ($_SESSION['hak_akses']=='Super Admin') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>

	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif
	if ($_GET["module"]=="beranda") { ?>
		<li class="active">
			<a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
	  	</li>
	<?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
		<li>
			<a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
	  	</li>
	<?php
	}

  // jika menu data material dipilih, menu data material aktif
  if ($_GET["module"]=="helm" || $_GET["module"]=="form_helm") { ?>
    <li class="active">
      <a href="?module=helm"><i class="fa fa-folder"></i> Data Material Isian Gudang </a>
      </li>
  <?php
  }
  // jika tidak, menu data material tidak aktif
  else { ?>
    <li>
      <a href="?module=helm"><i class="fa fa-folder"></i> Data Material Isian Gudang </a>
      </li>
  <?php
  }

  // jika menu data helm masuk dipilih, menu data helm masuk aktif
  if ($_GET["module"]=="helm_masuk" || $_GET["module"]=="form_helm_masuk") { ?>
    <li class="active">
      <a href="?module=helm_masuk"><i class="fa fa-clone"></i> Data Material Masuk </a>
      </li>
  <?php
  }
  // jika tidak, menu data helm masuk tidak aktif
  else { ?>
    <li>
      <a href="?module=helm_masuk"><i class="fa fa-clone"></i> Data Material Masuk </a>
      </li>
  <?php
  }

  // jika menu data helm keluar dipilih, menu data helm keluar aktif
  if ($_GET["module"]=="helm_keluar" || $_GET["module"]=="form_helm_keluar") { ?>
    <li class="active">
      <a href="?module=helm_keluar"><i class="fa fa-clone"></i> Data Material Keluar </a>
      </li>
  <?php
  }
  // jika tidak, menu data helm keluar tidak aktif
  else { ?>
    <li>
      <a href="?module=helm_keluar"><i class="fa fa-clone"></i> Data Material Keluar </a>
      </li>
  <?php
  }

	// jika menu Laporan Stok helm dipilih, menu Laporan Stok helm aktif
	if ($_GET["module"]=="lap_stok") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Akhir Isian Gudang </a></li>
        		<li><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
            <li><a href="?module=lap_helm_keluar"><i class="fa fa-circle-o"></i> Material Keluar </a></li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Helm Masuk dipilih, menu Laporan helm Masuk aktif
	elseif ($_GET["module"]=="lap_helm_masuk") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Laporan Stok Akhir Material Isian Gudang </a></li>
        		<li class="active"><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
            <li><a href="?module=lap_helm_keluar"><i class="fa fa-circle-o"></i> Material Keluar </a></li>
      		</ul>
    	</li>
    <?php
  }
  // jika menu Laporan Helm Keluar dipilih, menu Laporan helm Keluar aktif
	elseif ($_GET["module"]=="lap_helm_keluar") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Akhir Material </a></li>
            <li><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
            <li class="active"><a href="?module=lap_helm_keluar"><i class="fa fa-circle-o"></i> Material Keluar </a></li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan tidak dipilih, menu Laporan tidak aktif
	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Akhir Material </a></li>
        		<li><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
            <li><a href="?module=lap_helm_keluar"><i class="fa fa-circle-o"></i> Material Keluar </a></li>
      		</ul>
    	</li>
    <?php
	}

	// jika menu user dipilih, menu user aktif
	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active">
			<a href="?module=user"><i class="fa fa-user"></i> Manajemen User</a>
	  	</li>
	<?php
	}
	// jika tidak, menu user tidak aktif
	else { ?>
		<li>
			<a href="?module=user"><i class="fa fa-user"></i> Manajemen User</a>
	  	</li>
	<?php
	}

	// jika menu ubah password dipilih, menu ubah password aktif
	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	// jika tidak, menu ubah password tidak aktif
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	?>
	</ul>
	<!--sidebar menu end-->
<?php
}
// jika hak akses = Manajer, tampilkan menu
elseif ($_SESSION['hak_akses']=='Manajer') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>

	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif
	if ($_GET["module"]=="beranda") { ?>
		<li class="active">
			<a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
	  	</li>
	<?php
	}
	// jika tidak, menu beranda tidak aktif
	else { ?>
		<li>
			<a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
	  	</li>
	<?php
	}

	// jika menu Laporan Stok material dipilih, menu Laporan Stok material aktif
  if ($_GET["module"]=="lap_stok") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Akhir Material </a></li>
            <li><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
            <li><a href="?module=lap_helm_keluar"><i class="fa fa-circle-o"></i> Material Keluar </a></li>
          </ul>
      </li>
    <?php
  }
  // jika menu Laporan helm Masuk dipilih, menu Laporan helm Masuk aktif
  elseif ($_GET["module"]=="lap_helm_masuk") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Akhir Material </a></li>
            <li class="active"><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
            <li class="active"><a href="?module=lap_helm_keluar"><i class="fa fa-circle-o"></i> Material Keluar </a></li>
          </ul>
      </li>
    <?php
  }
  // jika menu Laporan tidak dipilih, menu Laporan tidak aktif
  else { ?>
    <li class="treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Akhir Material </a></li>
            <li><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
            <li><a href="?module=lap_helm_keluar"><i class="fa fa-circle-o"></i> Material Keluar </a></li>
          </ul>
      </li>
    <?php
  }

	// jika menu ubah password dipilih, menu ubah password aktif
	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	// jika tidak, menu ubah password tidak aktif
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	?>
	</ul>
	<!--sidebar menu end-->
<?php
}
// jika hak akses = Gudang, tampilkan menu
if ($_SESSION['hak_akses']=='Gudang') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>

	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif
  if ($_GET["module"]=="beranda") { ?>
    <li class="active">
      <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
      </li>
  <?php
  }
  // jika tidak, menu home tidak aktif
  else { ?>
    <li>
      <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
      </li>
  <?php
  }

  // jika menu data helm dipilih, menu data helm aktif
  if ($_GET["module"]=="helm" || $_GET["module"]=="form_helm") { ?>
    <li class="active">
      <a href="?module=helm"><i class="fa fa-folder"></i> Data Material Isian Gudang </a>
      </li>
  <?php
  }
  // jika tidak, menu data helm tidak aktif
  else { ?>
    <li>
      <a href="?module=helm"><i class="fa fa-folder"></i> Data Material Isian Gudang </a>
      </li>
  <?php
  }

  // jika menu data helm masuk dipilih, menu data helm masuk aktif
  if ($_GET["module"]=="helm_masuk" || $_GET["module"]=="form_helm_masuk") { ?>
    <li class="active">
      <a href="?module=helm_masuk"><i class="fa fa-clone"></i> Data Material Masuk </a>
      </li>
  <?php
  }
  // jika tidak, menu data Helm masuk tidak aktif
  else { ?>
    <li>
      <a href="?module=helm_masuk"><i class="fa fa-clone"></i> Data Material Masuk </a>
      </li>
  <?php
  }

  // jika menu Laporan Stok helm dipilih, menu Laporan Stok helm aktif
  if ($_GET["module"]=="lap_stok") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Akhir Material </a></li>
            <li><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
          </ul>
      </li>
    <?php
  }
  // jika menu Laporan helm Masuk dipilih, menu Laporan helm Masuk aktif
  elseif ($_GET["module"]=="lap_helm_masuk") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Akhir Material </a></li>
            <li class="active"><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
          </ul>
      </li>
    <?php
  }
  // jika menu Laporan tidak dipilih, menu Laporan tidak aktif
  else { ?>
    <li class="treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Akhir Material </a></li>
            <li><a href="?module=lap_helm_masuk"><i class="fa fa-circle-o"></i> Material Masuk </a></li>
          </ul>
      </li>
    <?php
  }

	// jika menu ubah password dipilih, menu ubah password aktif
	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	// jika tidak, menu ubah password tidak aktif
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	?>
	</ul>
	<!--sidebar menu end-->
<?php
}
?>