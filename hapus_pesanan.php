<?php
	if($_GET['id_pesanan']){
		include "connect.php";
		$qry_hapus=mysqli_query($conn,"delete from daftartiket where id_pesanan='".$_GET['id_pesanan']."'");
		if($qry_hapus){
			echo "<script>alert('Sukses Hapus Data Pesanan');location.href='tampil_pesanan.php';</script>";
		} else {
			echo "<script>alert('Gagal Hapus Data Pesanan');location.href='tampil_pesanan.php';</script>";
		}
	}
?>