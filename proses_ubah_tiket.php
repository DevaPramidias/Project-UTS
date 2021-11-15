<?php
if($_POST){
	$id_tiker=$_POST['id_tiker'];
	$nama=$_POST['nama'];
	$no_handphone=$_POST['no_handphone'];
	$no_pesanan=$_POST['no_pesanan'];	
	if(empty($nama)){
		echo "<script>alert('Nama tidak boleh kosong');location.href='ubah_tiket.php';</script>";

	} elseif (empty($no_handphone)){
		echo "<script>alert('No. Handphone tidak boleh kosong');location.href='ubah_tiket.php';</script>";
	} elseif (empty($no_pesanan)){
		echo "<script>alert('No. Pesanan tidak boleh kosong');location.href='ubah_tiket.php';</script>";

	} else {
		include "connect.php";

			$update=mysqli_query($conn,"update daftarpesanan set nama='".$nama."', no_handphone='".$no_handphone."', no_pesanan='".$no_pesanan."' where id_tiker = '".$id_tiker."'") or die(mysqli_error($conn));
			if($update){
				echo "<script>alert('Sukses update data');location.href='tampil_tiket.php';</script>";
			}else {
				echo "<script>alert('Gagal update data');location.href='ubah_tiket.php?id_tiker=".$id_tiker."';</script>";
			}
		

	}
}
?>