<?php 

//error_reporting(0);

define('PHPBEGO', TRUE);
include "koneksi.php"; 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Project UAS Matakuliah Komputer - Prodi IPS FITK UINSU</title>
	<link href="assets/images/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<div class="container">

		<div class="d-flex">
			<h3>Project UAS Matakuliah Komputer - Prodi IPS FITK UINSU</h3>
			<?php if (isset($_SESSION['user_name'])) { ?>
				<a href="logout.php" class="btn btn-secondary ml-auto">Logout</a>
			<?php } ?>
		</div>
		
		<div class="alert alert-success my-2"> Selamat Datang <strong><?php echo $_SESSION['user_nama_lengkap']; ?></strong> </div>

		<?php 

		if (isset($_SESSION['user_name']))
		{
			if (isset($_GET['halaman']))
			{
				include $_GET['halaman'] . '.php';
			} else {
				include "utama.php";
			}

		} else {
			include "login.php";
		}

		?>
		
	</div>	

	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	
	<script>
		$('#nav-tab a').on('click', function (e) {
			e.preventDefault()
			$(this).tab('show')
		})
	</script>

</body>
</html>