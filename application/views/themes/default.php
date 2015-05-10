<html lang="en">
<head>
<title><?php echo $title; ?></title>
<meta name="resource-type" content="document" />
<meta name="robots" content="all, index, follow" />
<meta name="googlebot" content="all, index, follow" />
<style>
body {
	font: 14px helvetica neue, helvetica, arial, sans-serif;
}
.myapp{
	width:50%;
	margin:auto;
}
#cy {
	height: 100%;
	width: 100%;
	position: relative;
	left: 0;
	top: 0;
}

#eat {
	position: relative;
	left: 1em;
	top: 1em;
	font-size: 1em;
	z-index: -1;
	color: #c88;
}
</style>
	<?php
	/** -- Copy from here -- */
	if(!empty($meta))
	foreach($meta as $name=>$content){
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
			 }
	echo "\n";

	if(!empty($canonical))
	{
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

	}
	echo "\n\t";

	foreach($css as $file){
	 	echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	} echo "\n\t";

	foreach($js as $file){
			echo "\n\t\t";
			?><script src="<?php echo $file; ?>"></script><?php
	} echo "\n\t";

	/** -- to here -- */
?>

    <!-- Le styles -->
   
    <!-- /page level plugin styles -->

    <!-- core styles -->

<link
	href="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap.css"
	rel="stylesheet">
<link
	href="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap-responsive.css"
	rel="stylesheet">
<link
	href="<?php echo base_url(); ?>assets/themes/default/css/general.css"
	rel="stylesheet">
<link
	href="<?php echo base_url(); ?>assets/themes/default/css/custom.css"
	rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/themes/default/css/db.css"
	rel="stylesheet">
	 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/chosen.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jquery.datatables.css">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon"
	href="<?php echo base_url(); ?>assets/themes/default/images/favicon.png"
	type="image/x-icon" />
<meta property="og:image"
	content="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />
<link rel="image_src"
	href="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <img
					src="<?php echo base_url(); ?>assets/themes/default/img/logo1.png"
					style="width: 32px; float: left; margin-top: 5px; z-index: 5"
					alt="logo" /> <a class="brand" href="<?php echo site_url(); ?>">&nbsp;&nbsp;Warped Tour Directory</a>
				<div style="height: 0px;" class="nav-collapse collapse">
					<ul class="nav">
						
						<li class="active"><a href="/db/warpedtour">Warpedtour</a></li>
						<li class="active"><a href="/db/artist">Artist</a></li>
						<li class="active"><a href="/db/band">Band</a></li>
						<li class="active"><a href="/db/genre">Genre</a></li>
						<li class="active"><a href="/db/sponsor">Sponsors</a></li>
						<li class="active"><a href="/db/album">Albums</a></li>
						<li class="active"><a href="/db/song">Songs</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">
    <?php if($this->load->get_section('text_header') != '') { ?>
    	<h1><?php echo $this->load->get_section('text_header');?></h1>
    <?php }?>
    <div class="row">
	    <?php echo $output;?>
		<?php echo $this->load->get_section('sidebar'); ?>
    </div>
		<hr />

		<footer>
			<div class="row">
				<div class="span6 b10">
					Copyright &copy; <a target="_blank"
						href="http://www.dineshdevkota.com">Dinesh Devkota</a> | <a
						target="_blank" href="http://www.dineshdevkota.com">www.dineshdevkota.com</a>
				</div>
			</div>
		</footer>

	</div>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.placeholder.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/fastclick.js"></script>
    <!-- /core scripts -->

    <!-- page level scripts -->
    <script src="<?php echo base_url(); ?>assets/plugins/chosen.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.dataTables.js"></script>
    <!-- /page level scripts -->

   

    <!-- page script -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datatables.js"></script>
    <script>
    $('.custom-table').DataTable();
    </script>
</body>
</html>
