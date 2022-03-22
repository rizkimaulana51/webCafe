<?PHP
	require "koneksi.php";
	$id=$_GET['id'];
	mysqli_query($conn, "DELETE FROM tuser WHERE id='$id'") or die (mysqli_error($conn));
	echo "<script>alert('User $username Berhasil di Hapus');";
	echo "document.location='lapuser.php';</script>";
?>