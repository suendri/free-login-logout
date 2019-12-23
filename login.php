<?php 

if (!defined('PHPBEGO') == TRUE)
{
	header("location:index.php");
} 


if (isset($_POST['t_login']))
{

    $u_name = htmlentities($_POST['i_name']);
    $u_pass = htmlentities($_POST['i_pass']);
    
	$sql = "SELECT * FROM tb_user 
	WHERE user_name = :user_name 
	AND user_pass = PASSWORD(:user_pass)";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam("user_name", $u_name);
	$stmt->bindParam("user_pass", $u_pass);
	$stmt->execute();

	if ($stmt->rowCount() > 0)
	{
		$result = $stmt->fetch();
		$_SESSION['user_name'] = $_POST['i_name'];
		$_SESSION['user_nama_lengkap'] = $result['user_nama_lengkap'];
		header("location:index.php");
	} else {
		sleep(5);
		header("location:index.php");
	}
}

?>

<div class="row">
	<div class="col-md-4">
		<form action="" method="POST">
			<div class="card my-3">
				<div class="card-header">
					<label>Login</label>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="i_name" class="form-control" required="" maxlength="15" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="i_pass" class="form-control" required="" maxlength="15" placeholder="Password">
					</div>								
				</div>
				<div class="card-footer">
					<div class="d-flex float-right">
						<input type="submit" name="t_login" value="Login" class="btn btn-primary">
					</div>	
				</div>
			</div>
		</form>
	</div>
</div>