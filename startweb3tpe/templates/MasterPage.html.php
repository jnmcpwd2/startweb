<!DOCTYPE html>
<html data-bs-theme="dark">
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />

		<script type="text/javascript" src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
	</head>
	
	<body>
		<main>
			<header>
				<?php include('menu.html.php'); ?>
			</header>
			<section class="content">
				<?php
					$page = isset($_GET['page']) ? $_GET['page'] : 'index';
					$action = isset($_GET['action']) ? $_GET['action']: 'index';
					if (is_file($actionFile = 'actions' . DIRECTORY_SEPARATOR . $page . DIRECTORY_SEPARATOR . $action . 'Action.php'))
					{
						include ($actionFile);
						include ('templates/messages.html.php');
						if (is_file($viewFile = 'templates/views' . DIRECTORY_SEPARATOR . $page . DIRECTORY_SEPARATOR . $action . '.php'))
						{
							include ($viewFile);
						}						
					}
					else
					{
						throw new Exception ('Cannot include file: ' . $actionFile);
					}			
					//exit;
				?>
			</section>
		</main>
    </body>
</html>