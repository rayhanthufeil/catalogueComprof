<?php
include "koneksi.php";
$a = $_POST["idBerita"];

$edit = mysqli_query($koneksi,"DELETE FROM berita where idBerita='$a'");


if($edit)
{
	//echo "sukses input";
	?>
	<script>
		alert("sukses delete");
		window.location="news.php";
	</script>
	<?php
}else
{
	echo "gagal input";
}
?>

