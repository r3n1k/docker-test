<html>

<head>
	<title>Hello Girl</title>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}
	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<h1 style="color:green;"> Hello World by Renik ! </h1>
	<?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?></h3><?php } ?>
	<?php if($_ENV["USER"]) {?><h3>My user is <?php echo $_ENV["USER"]; ?></h3><?php } ?>
	<?php phpinfo(); ?>
		</body>
</html>
