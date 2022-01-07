<?php



	if ($_GET['module'] == "detailcontent") {
		include "content_detail_item.php";
	} 
	else if ($_GET['module'] == "detailartikel") {
		include "content_artikel.php";
	} 
	
	else if ($_GET['module'] == "detailbuletin") {
		include "content_buletin.php";
	}
	elseif ($_GET['module'] == "pengumuman") {
include "all_pengumuman.php";
} elseif ($_GET['module'] == 'detailpengumuman') {
include "pengumuman_detail.php";
}
	
	elseif ($_GET['module'] == "all_galeri") {
		include "all_gallery.php";
	} elseif ($_GET['module'] == "detail_galeri"){
include "galeri_detail.php";
}

elseif ($_GET['module'] == "halamanstatis") {
		include "halamanstatis.php";
	} elseif ($_GET['module'] == "all_berita") {
		include "all_berita.php";
	} elseif ($_GET['module'] == "all_artikel") {
		include "all_artikel.php";
	}
	
	elseif ($_GET['module'] == "all_buletin") {
		include "all_buletin.php";
	}
	
	else if ($_GET['module'] == "all_video") {
		include "all_video.php";
	}
	
	elseif ($_GET['module'] == "kontak") {
		include "kontak.php";
	}
	
	elseif ($_GET['module'] == "pengaduan") {
		include "pengaduan.php";
	}

	else {
		include "default_page.php";
	}


?>

