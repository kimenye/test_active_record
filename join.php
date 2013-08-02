
<html>
	<head>
		<title>GoTv Fan Page</title>
	</head>
	<body>
		<h1>Welcome
			<?php
				ini_set('display_errors', 1);
				require_once 'php-activerecord/ActiveRecord.php';

				ActiveRecord\Config::initialize(function($cfg)
				{
			     $cfg->set_model_directory('models');
			     $cfg->set_connections(array(
		         'development' => 'mysql://root:root@localhost/test_active_record'));
   			  	});
				
				$user = User::create(array('email' => $_POST['email'], 'name' => $_POST['name']));
				echo $user->name;
				echo 'Here';
			?>
		</h1>
	
	</body>
</html>