<?php 

/**
 * Gosoftware Media Abadi 2019
 * --
 * --
 * Gosoftware Media Abadi
 * http://gosoftware.web.id
 * e-mail : cs@gosoftware.web.id
 * WA : 6285263616901
 * --
 * --
 */

if (!defined('PHPBEGO') == TRUE)
{
	header("location:index.php");
}

$nim = $_SESSION['user_name'];

$sql1 = "SELECT * FROM tb_uas WHERE uas_nim= :uas_nim";

$stmt1 = $koneksi->prepare($sql1);
$stmt1->bindParam(":uas_nim", $nim);
$stmt1->execute();
$result = $stmt1->fetch();

if (isset($_POST['t_simpan']))
{
	$sql2 = "UPDATE tb_uas SET uas_blog = :uas_blog, uas_edmodo = :uas_edmodo, uas_youtube = :uas_youtube 
	WHERE uas_nim = :uas_nim";

	$stmt2 = $koneksi->prepare($sql2);
	$stmt2->bindParam(":uas_blog", $_POST['i_blog']);
	$stmt2->bindParam(":uas_edmodo", $_POST['i_edmodo']);
	$stmt2->bindParam(":uas_youtube", $_POST['i_youtube']);
	$stmt2->bindParam(":uas_nim", $nim);
	$stmt2->execute();

	header ("location:index.php");

}
?>

<div class="alert alert-info text-break my-3">
	<h3>Format Project</h3>
	<ol>
		<li>https://phpbego.wordpress.com</li>
		<li>https://new.edmodo.com/profile/suendri-edmodo/</li>
		<li>https://www.youtube.com/watch?v=ywHcr42fCjc</li>
	</ol>
</div>

<div class="row">
	<div class="col">
		<form action="" method="POST">
			<div class="card my-3">
				<div class="card-header">
					<label>Data</label>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>BLOG</label>
						<input type="text" name="i_blog" class="form-control" value="<?php echo $result['uas_blog']; ?>" required="">
					</div>
					<div class="form-group">
						<label>EDMODO</label>
						<input type="text" name="i_edmodo" class="form-control" value="<?php echo $result['uas_edmodo']; ?>" required="">
					</div>	
					<div class="form-group">
						<label>YOUTUBE</label>
						<input type="text" name="i_youtube" class="form-control" value="<?php echo $result['uas_youtube']; ?>" required="">
					</div>								
				</div>
				<div class="card-footer">
					<div class="d-flex float-right">
					    <a href="index.php" class="btn btn-danger mr-2">Batal</a>
						<input type="submit" name="t_simpan" value="Simpan" class="btn btn-primary">
					</div>	
				</div>
			</div>
		</form>
	</div>
</div>