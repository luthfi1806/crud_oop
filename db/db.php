<?php
$config = array('host' 	   => 'localhost',
				'username' => 'root',
				'password' => 'j4j4n',
				'database' => 'db_inventaris');
$db = new mysqli($config['host'],
				 $config['username'],
				 $config['password'],
				 $config['database']);
if(mysqli_connect_errno()){
	echo "error tidak dapat konek database";
}
?>