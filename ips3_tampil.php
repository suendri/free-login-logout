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

$sql = "SELECT tb_uas.*, 
tb_user.user_name, 
tb_user.user_nama_lengkap
FROM tb_uas, tb_user WHERE tb_uas.uas_nim=tb_user.user_name
AND tb_uas.uas_kelas='3' ORDER BY tb_user.user_nama_lengkap";

$stmt = $koneksi->prepare($sql);
$stmt->execute();

?>

<div class="table-responsive">
    <table class="table table-bordered mt-4">
    	<tr>
    		<th>NO</th>
    		<th>NAMA</th>
    		<th>BLOG</th>
    		<th>EDMODO</th>
    		<th>YOUTUBE</th>
    		<th>AKSI</th>
    	</tr>
    	<?php $no=0; while ($row = $stmt->fetch()) { $no++;?>
    		<tr>
    			<td><?php echo $no; ?></td>
    			<td><?php echo $row['user_nama_lengkap']; ?></td>
    			<td><a href="<?php echo $row['uas_blog']; ?>" target="_blank"><?php echo $row['uas_blog']; ?></a></td>
    			<td><a href="<?php echo $row['uas_edmodo']; ?>" target="_blank"><?php echo $row['uas_edmodo']; ?></a></td>
    			<td><a href="<?php echo $row['uas_youtube']; ?>" target="_blank"><?php echo $row['uas_youtube']; ?></a></td>
    			<td>
    				<?php if ($row['uas_nim'] == $_SESSION['user_name']) { ?>
    					<a href="index.php?halaman=ips0_edit" class="btn btn-primary">Edit</a>
    				<?php } ?>
    			</td>					
    		</tr>
    	<?php } ?>
    </table>
</div>