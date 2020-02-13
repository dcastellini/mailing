<?php
    /* @var $this SiteController */
    $this->pageTitle=Yii::app()->name;
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" media="screen, projection">
<form class="form-signin container">
    <h1 class="h3 mb-3 font-weight-normal">Mailing Contact 1.0</h1>
    <label for="inputEmail" class="sr-only">
        Email address
    </label>
    <input type="text" id="inputUsuario" class="form-control" placeholder="Usuario" required="" autofocus="">
    <label for="inputPassword" class="sr-only">
        Password
    </label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <button class="btn btn-lg btn-outline-primary btn-block" type="submit">
        Login
    </button>
    <p class="mt-5 mb-3 text-muted">© 2020</p>
</form>
