<?php
    /* @var $this SiteController */
    $this->pageTitle=Yii::app()->name;
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/index.css" media="screen, projection">

<?php  if(isset(Yii::app()->session['id_usuario'])){
    $Us = Usuario::model()->findByPk(Yii::app()->user->id);
    echo "<input type='hidden' value='$Us->id_perfil' id='perfil'>";
}?>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="https://getbootstrap.com/docs/4.4/examples/sticky-footer-navbar/#">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.svg"" alt="" width="35" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="https://getbootstrap.com/docs/4.4/examples/sticky-footer-navbar/#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://getbootstrap.com/docs/4.4/examples/sticky-footer-navbar/#">Enviar E-mail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="https://getbootstrap.com/docs/4.4/examples/sticky-footer-navbar/#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Mis Datos</a>
                        <a class="dropdown-item" href="../site/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>


<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Sticky footer with fixed navbar</h1>
        <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
        <p>Back to <a href="https://getbootstrap.com/docs/4.4/examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>
    </div>
</main>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
