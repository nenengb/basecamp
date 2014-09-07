<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?= base_url() ?>assets/css/lighter.css" rel="stylesheet">
		<script src="<?= base_url()?>assets/ckeditor/ckeditor.js"></script>
	</head>
<body>
<?php

$this->load->view($view);

?>
	<footer>
		<div class="container clearfix">
			<p class="pull-left">Ociones &amp; Huavas BSIT - 4R1</p>
		</div> <!-- /.container -->
	</footer>

<script src="<?= base_url() ?>assets/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

</body>
</html>
