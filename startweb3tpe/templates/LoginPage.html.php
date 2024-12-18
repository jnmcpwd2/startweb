<!DOCTYPE html>
<html data-bs-theme="dark">
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />

		<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
	</head>
	
	<body>
		<main>
			<section class="content">
                <?php include ('templates/messages.html.php'); ?>
                <div class="container">
                    <div class="form">
                        <form action="login.php" method="post">
                            <div class="mb-4">
                                <label class="form-label" for="email">Adres E-mail</label>
                                <input id="email" class="form-control" type="email" name="email" placeholder="Adres E-mail" value="<?php if(isset($form['email'])): echo $form['email'];  endif;?>" require>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="password">Hasło</label>
                                <input id="password" class="form-control" type="password" name="password" placeholder="Hasło" require />
                            </div>
                            <div class="mb-4 d-flex justify-content-end">
                                <button class="btn btn-success" type="submit" name="submit">Wyślij</button>
                            </div>                             
                        </form>
                    </div>
                </div>
			</section>
		</main>
    </body>
</html>