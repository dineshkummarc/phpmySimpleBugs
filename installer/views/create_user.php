<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo lang('welcome_to_lmtools'); ?></title>

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/install.css" />
</head>
<body>

<div id="container">
	<h1><?php echo lang('welcome_to_lmtools'); ?></h1>

	<div id="body">
		
		
		<p><?php echo lang('need_admin_user'); ?></p>
		
		<?php echo validation_errors(); ?>

		<form method="post" action="">
			<p>
				<label for="email"><?php echo lang('email_address'); ?></label>	
				<input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>">
			</p>
			
			<p>
				<label for="password"><?php echo lang('password'); ?></label>	
				<input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>">
			</p>		
			
			<p>
				<label for="password_confirm"><?php echo lang('password_confirm'); ?></label>	
				<input type="password" name="password_confirm" id="password_confirm" value="<?php echo set_value('password_confirm'); ?>">
			</p>		
				
			<p>
				
				<input type="submit" name="create" value="<?php echo lang('create'); ?>">
			</p>			
						
		</form>
		
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>