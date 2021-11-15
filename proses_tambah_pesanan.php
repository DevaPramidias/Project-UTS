<?php
if($_POST){
	$nama=$_POST['nama'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$alamat=$_POST['alamat'];
	$no_handphone=$_POST['no_handphone'];
	$no_pesanan=$_POST['no_pesanan'];
	if(empty($nama)){
		echo "<script>alert('Nama Pesanan tidak boleh kosong');location.href='tambah_pesanan.php';</script>";

	} elseif (empty($no_handphone)){
		echo "<script>alert('No. Handphone tidak boleh kosong');location.href='tambah_pesanan.php';</script>";
	} elseif (empty($no_pesanan)){
		echo "<script>alert('No. Pesanan tidak boleh kosong');location.href='tambah_pesanan.php';</script>";	
	} else {
		include "connect.php";
		$insert=mysqli_query($conn,"insert into daftartiket (nama,tanggal_lahir, alamat, no_handphone, no_pesanan)  value ('".$nama."','".$tanggal_lahir."','".$alamat."','".$no_handphone."','".$no_pesanan."')") or die(mysqli_error($conn));
		if($insert){
				echo "<script>alert('Sukses menambahkan Pesanan');location.href='tampil_pesanan.php';</script>";
		} else {
				echo "<script>alert('Gagal menambahkan Pesanan');location.href='tambah_pesanan.php';</script>";
		}
	}
}
?>