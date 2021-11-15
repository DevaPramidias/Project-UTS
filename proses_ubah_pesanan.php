<?php
if($_POST){
	$id_pesanan=$_POST['id_pesanan'];
	$nama=$_POST['nama'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$alamat=$_POST['alamat'];
	$no_handphone=$_POST['no_handphone'];
	$no_pesanan=$_POST['no_pesanan'];	
	if(empty($nama)){
		echo "<script>alert('nama tidak boleh kosong');location.href='ubah_pesanan.php';</script>";

	} elseif (empty($no_handphone)){
		echo "<script>alert('No. Handphone tidak boleh kosong');location.href='ubah_pesanan.php';</script>";
	} else {
		include "connect.php";

			$update=mysqli_query($conn,"update daftartiket set nama='".$nama."',tanggal_lahir='".$tanggal_lahir."', alamat='".$alamat."', no_handphone='".$no_handphone."', no_pesanan='".$no_pesanan."' where id_pesanan = '".$id_pesanan."'") or die(mysqli_error($conn));
			if($update){
				echo "<script>alert('Sukses update data');location.href='tampil_pesanan.php';</script>";
			}else {
				echo "<script>alert('Gagal update data');location.href='ubah_pesanan.php?id_pesanan=".$id_pesanan."';</script>";
			}
		

	}
}
?>