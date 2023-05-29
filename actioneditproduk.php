<?php
include "koneksi.php";
$a = $_POST["idProduk"];
$c = $_POST["text"];

$edit = mysqli_query($koneksi,"UPDATE produk set deskripsiProduk='$c' where idProduk='$a'");


if($edit)
{
	?>
	<script>
		alert("sukses edit data");
		window.location="produk.php";
	</script>
	<?php
}else
{
	echo "gagal input";
}
?>