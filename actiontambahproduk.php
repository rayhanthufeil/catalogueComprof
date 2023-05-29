<?php
include "koneksi.php";
$a = $_POST["merk"];
$b = $_POST["namaproduk"];
$c = $_POST["deskripsi"];

if(!empty($_FILES['uploaded_file']))
{
  $path = "img/";
  $path2 = $path . basename( $_FILES['uploaded_file']['name']);

  if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path2)) {
    echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
    " has been uploaded";
  } else{
      echo "There was an error uploading the file, please try again!";
  }
}

$perintah=mysqli_query($koneksi,"INSERT INTO produk values ('','$a','$b','$c','$path2')");

if($perintah)
{
	//echo "sukses input";
	?>
	<script>
		alert("sukses input data!!!");
		window.location="produk.php";
	</script>
	<?php
}else
{
	echo "gagal input";
}
?>