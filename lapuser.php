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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">CONTOH LAPORAN DATA</h1>
                    <p class="mb-4">Berikut adalah contoh seluruh data yang terdaftar</p>
                                          
<!-- ISI FORM -->
<FORM ACTION="" METHOD="POST">
<Font color=black size=2px face=verdana>
<a href="formuser.php">Tambah Data</a><BR>
<a href="#.php">Lihat Seluruh Data</a><BR>
<input type=text name="key" placeholder="Pencarian">
<input type="submit" name="cari" value="Search"><BR><BR>
</form>

<?PHP
require "koneksi.php";
$key=$_POST['key'];
$sql="SELECT * FROM tuser WHERE id LIKE '%$key%' or nama LIKE '%$key%' OR status LIKE '%$key%' ORDER BY id DESC";
$ambildata=mysqli_query($conn,$sql);
if(!$ambildata)
{
    die('Gagal ambil data : '.mysqli_error($content));
}
    ECHO "<div class='table-responsive'>";
    ECHO "<TABLE class='table table-bordered table-striped table-hover'><TR>";
    ECHO "<TD><B>id</B></TD>";
    ECHO "<TD><B>nama</B></TD>";
    ECHO "<TD><B>status</B></TD>";
    ECHO "<TD><B>Aksi</B></TD>";
while ($row=mysqli_fetch_assoc($ambildata))
{
    ECHO "<TR><TD>".$row['id'];
    ECHO "</TD><TD>".$row['nama'];
    ECHO "</TD><TD>".$row['status'];
    ECHO "</TD><TD><a href='edituser.php?id=$row[id]'>Edit</a>&nbsp;|&nbsp;";
    ECHO "<a href='deleteuser.php?id=$row[id]' onClick='return confirm('Yakin Data di Hapus?'); '>Hapus</a></TD></TR>";

}
ECHO "</TABLE></font></div>";

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