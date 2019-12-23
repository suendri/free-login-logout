<?php 

if (!defined('PHPBEGO') == TRUE)
{
	header("location:index.php");
} 

?>

<div class="alert alert-warning">
    Pastikan Project memiliki hubungan dengan anda seperti <b>Nama Lengkap atau Nama Pena</b>.<br>
    Seluruh Project wajib memiliki <b>5 Konten Postingan</b> dan sesuai dengan <b>Contoh Format</b> atau project tidak dinilai.
</div>

<nav class="mt-4">
	<div class="nav nav-tabs" id="nav-tab" role="tablist">
		<a class="nav-item nav-link active" id="nav-ips2-tab" data-toggle="tab" href="#nav-ips2" role="tab" aria-controls="nav-ips2" aria-selected="true">3-IPS-2</a>
		<a class="nav-item nav-link" id="nav-ips3-tab" data-toggle="tab" href="#nav-ips3" role="tab" aria-controls="nav-ips3" aria-selected="false">3-IPS-3</a>
	</div>
</nav>
<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-ips2" role="tabpanel" aria-labelledby="nav-ips2-tab">
		<?php include "ips2_tampil.php"; ?>
	</div>
	<div class="tab-pane fade" id="nav-ips3" role="tabpanel" aria-labelledby="nav-ips3-tab">
		<?php include "ips3_tampil.php"; ?>
	</div>
</div>

<div class="my-5"></div>