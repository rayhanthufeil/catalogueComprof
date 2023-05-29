<?php
include "koneksi.php";
$a = $_POST["idBerita"];
$c = $_POST["text"];

$edit = mysqli_query($koneksi,"UPDATE berita set isi='$c' where idBerita='$a'");


if($edit)
{
	//echo "sukses input";
	?>
	<script>
		alert("sukses input data!!!");
		window.location="news.php";
	</script>
	<?php
}else
{
	echo "gagal input";
}
?>