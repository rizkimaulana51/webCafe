<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selamat Datang di Web Kami</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include ("1sidebar.php");
        ?>

        <!-- Content Wrapper Topbar-->
        <?php
        include ("2topbar.php");
        ?>        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

            <!-- Begin Page Content -->
                <div class="container-fluid">


<?PHP
	INCLUDE("koneksi.php");
	$username=$_GET['username'];
	$query=mysqli_query($conn,"select * from tuser where username='$username'");
	$row=mysqli_fetch_assoc($query);
?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Contoh Edit Data</h1>
                    <p class="mb-4">Berikut contoh mengubah data</p>
                                          
            <!-- ISI FORM -->
            <form class="user" METHOD="POST">
            <table border=0 align=center HEIGHT="360">
            <tr>
                <td>USERNAME</td>
                <td>:</td>
                <td><INPUT TYPE="text" NAME="username" class="card form-control" disabled value="<?PHP echo $row["username"]; ?>">
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td>:</td>
                <td><INPUT TYPE="PASSWORD" NAME="password" class="card form-control" value="<?PHP echo $row["password"]; ?>"></td>
            </tr>
            <tr>
                <td>STATUS</td>
                <td>:</td>
                <td><SELECT NAME="status">
                	<option SELECTED><?PHP echo $row["status"]; ?>
                    <option>::PILIHAN::
                    <option>Admin
                    <option>Siswa
                    <option>Wali Kelas
                    <option>Staff
                    <option>Guru
                    </SELECT></td>
            </tr>
            <tr>
                <td>KODE USER</td>
                <td>:</td>
                <td><INPUT TYPE="text" NAME="kduser" class="card form-control" value="<?PHP echo $row["kduser"]; ?>">
            </tr>
            <tr>
                <td>KETERANGAN</td>
                <td>:</td>
                <td><TEXTAREA NAME="ket" ROWS="5" COLS="10" class="card form-control"><?PHP echo $row["ket"]; ?></TEXTAREA>
            </tr>
            <tr>
                <td colspan=3><CENTER><BR>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-google btn-user btn-block">
                    <input type="reset" name="reset" value="Hapus" class="btn btn-facebook btn-user btn-block"></CENTER><BR>
                <A HREF="3"><CENTER>Batal Edit Data</CENTER><BR><BR><BR></A>
                </td>
            </tr>
            </table>
            </form>

<?PHP
if(isset($_POST['submit']))
{
require "koneksi.php";

$password=$_POST['password'];
$status=$_POST['status'];
$kduser=$_POST['kduser'];
$ket=$_POST['ket'];

mysqli_query("update tuser set password='$password',status='$status',kduser='$kduser',ket='$ket' where username='$username'") or die (mysqli_error());
	
echo "<script>alert('User $username Berhasil di Edit');";
echo "document.location='lapuser.php';</script>";
}
?>



</div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
                include ("3footer.php");
            ?>
            </div>


        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>