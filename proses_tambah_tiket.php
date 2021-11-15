<?php
if($_POST){
	$nama=$_POST['nama'];
	$no_handphone=$_POST['no_handphone'];
	$no_pesanan=$_POST['no_pesanan'];
	if(empty($nama)){
		echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_tiket.php';</script>";

	} elseif (empty($no_handphone)){
		echo "<script>alert('No. Handphone tidak boleh kosong');location.href='tambah_tiket.php';</script>";
	} elseif (empty($no_pesanan)){
		echo "<script>alert('No. Pesanan tidak boleh kosong');location.href='tambah_tiket.php';</script>";	
	} else {
		include "connect.php";
		$insert=mysqli_query($conn,"insert into daftarpesanan (nama, no_handphone, no_pesanan)  value ('".$nama."','".$no_handphone."','".$no_pesanan."')") or die(mysqli_error($conn));
		if($insert){
				echo "<script>alert('Sukses menambahkan Tiket');location.href='tampil_tiket.php';</script>";
		} else {
				echo "<script>alert('Gagal menambahkan Tiket');location.href='tambah_tiket.php';</script>";
		}
	}
}
?>