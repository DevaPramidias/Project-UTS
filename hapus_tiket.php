<?php
	if($_GET['id_tiker']){
		include "connect.php";
		$qry_hapus=mysqli_query($conn,"delete from daftarpesanan where id_tiker='".$_GET['id_tiker']."'");
		if($qry_hapus){
			echo "<script>alert('Sukses Hapus Data Tiket');location.href='tampil_tiket.php';</script>";
		} else {
			echo "<script>alert('Gagal Hapus Data Tiket');location.href='tampil_tiket.php';</script>";
		}
	}
?>