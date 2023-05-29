<?php
include "koneksi.php";
$a = $_POST["idProduk"];

$edit = mysqli_query($koneksi,"DELETE FROM produk where idProduk='$a'");


if($edit)
{
	//echo "sukses input";
	?>
	<script>
		alert("sukses delete");
		window.location="produk.php";
	</script>
	<?php
}else
{
	echo "gagal input";
}
?>

