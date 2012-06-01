<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo lang('welcome_to_simplebugs'); ?></title>

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/install.css" />
</head>
<body>

<div id="container">
	<h1><?php echo lang('welcome_to_simplebugs'); ?></h1>

	<div id="body">
		
		
		<p>
			<?php echo lang('setup_complete'); ?>	
		</p>		
		
		<p>
			<strong><?php echo lang('remove_install_folder'); ?>	</strong>	
		</p>
		
		<p>
			<?php echo sprintf(lang('goto_admin'), base_url()); ?>	
		</p>		

		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>