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
		
		
		<p><?php echo lang('files_must_writable'); ?></p>
		<code>
		<?php foreach($precheck as $file => $value): ?>
		<span class="<?php echo ($value) ? "ok" : "error"; ?>"><?php echo $file; ?></span><br>
		<?php endforeach; ?>
		</code>

		<p><?php echo lang('enter_db_settings'); ?></p>
		<p><?php echo lang('db_settings_help'); ?></p>
		
		<?php echo validation_errors(); ?>

		<form method="post" action="">
			
			<h2><?php echo lang('database_settings'); ?></h2>
			<p>
				<label for="db_hostname"><?php echo lang('db_hostname'); ?></label>	
				<input type="text" name="db_hostname" id="db_hostname" value="<?php echo set_value('db_hostname', 'localhost'); ?>">
			</p>
			
			<p>
				<label for="db_username"><?php echo lang('db_username'); ?></label>	
				<input type="text" name="db_username" id="db_username" value="<?php echo set_value('db_username'); ?>">
			</p>			
			
			<p>
				<label for="db_password"><?php echo lang('db_password'); ?></label>	
				<input type="password" name="db_password" id="db_password" value="<?php echo set_value('db_password'); ?>">
			</p>		
			
			<p>
				<label for="db_database"><?php echo lang('db_database'); ?></label>	
				<input type="text" name="db_database" id="db_database" value="<?php echo set_value('db_database'); ?>">
			</p>			

			<p>
				<label for="db_driver"><?php echo lang('db_driver'); ?></label>	
				<select name="db_driver">
					<option value="mysqli"<?php if(set_value('db_driver', 'mysqli') == "mysqli"): ?> selected="selected"<?php endif; ?>>MySQL Improved</option>	
					<option value="mysql"<?php if(set_value('db_driver') == "mysql"): ?> selected="selected"<?php endif; ?>>MySQL</option>	
				</select>				
			</p>			

			<p>
				<label for="db_prefix"><?php echo lang('db_prefix'); ?></label>	
				<input type="text" name="db_prefix" id="db_prefix" value="<?php echo set_value('db_prefix', 'sb_'); ?>">
			</p>			


			<h2><?php echo lang('user_account'); ?></h2>

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
				
			
			<hr>
				
			<p>
				
				<input type="submit" name="create" value="<?php echo lang('install'); ?>">
			</p>			

		</form>
		
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>