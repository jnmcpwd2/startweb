<?php
    $formAction = "index.php?page=index&action=";
    $formAction .= isset($_GET['id']) ? 'edit&id=' . $_GET['id'] : 'add';
   /* if (isset($dbStatus['status']))
    {
        showMessage($dbStatus['status'], $dbStatus['msg']);
    }
    */
?>
<div class="container">
    <?php if ($isError): displayErrors(); endif; ?>
    <h1 class="align-center">Formularz dodawania użytkownika</h1>
    <div class="form">
        <form action="<?php echo $formAction; ?>" method="post">
            <input type="hidden" name="id" value="<?php if(isset($form['id'])): echo $form['id'];  endif;?>" />
            <div class="mb-4">
                <label class="form-label" for="name">Imię</label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Imię" value="<?php if(isset($form['name'])): echo $form['name'];  endif;?>" require>
            </div>
            <div class="mb-4">
                <label class="form-label" for="surname">Nazwisko</label>
                <input class="form-control" type="text" name="surname" placeholder="Nazwisko" value="<?php if(isset($form['surname'])): echo $form['surname'];  endif;?>" require/>
            </div>
            <!--<div class="mb-4">
                <label class="form-label" for="birth-date">Data urodzenia</label>
                <input class="form-control" type="date" name="birth_date" placeholder="Data urodzenia" value="<?php if(isset($_POST['birth_date']) && $isError): echo $_POST['surname']; endif; ?>" require/>
            </div>-->       
            <div class="mb-4">
                <label class="form-label" for="email">Adres E-mail</label>
                <input id="email" class="form-control" type="email" name="email" placeholder="Adres E-mail" value="<?php if(isset($form['email'])): echo $form['email'];  endif;?>" require>
            </div>
            <div class="mb-4">
                <div class="form-check">
                    <label class="form-check-label" for="checkPasswordChange">Zmiana hasła</label>
                    <input id="checkPasswordChange" class="form-check-input" type="checkbox" name="change_pass" <?php if(isset($form['change_pass'])): echo 'checked'; endif; ?> />
                </div> 
            </div>            
            <div class="mb-4">
                <label class="form-label" for="password">Hasło</label>
                <input id="password" class="form-control" type="password" name="password" placeholder="Hasło" require />
            </div>                      
            <div class="mb-4">
                <label class="form-label" for="password2">Powtórz hasło</label>
                <input id="password2" class="form-control" type="password" name="password2" placeholder="Powtórz hasło" require />
            </div>
            <div class="mb-4">
                <div class="form-check">
                    <label class="form-check-label" for="checkActive">Aktywność</label>
                    <input id="checkActive" class="form-check-input" type="checkbox" name="active" <?php if(isset($form['active']) && $form['active'] == 1): echo 'checked'; endif; ?> />
                </div> 
            </div>            
            <div class="mb-4 d-flex justify-content-end">
                <a class="btn btn-warning" href="<?php echo BASE_URL; ?>">Powrót</a>&nbsp;&nbsp;
                <button class="btn btn-success" type="submit" name="submit">Wyślij</button>
            </div>
        </form>
    </div>    
</div>