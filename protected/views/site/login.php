<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" media="screen, projection">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/login.js"></script>

<div class="modal" tabindex="-1" role="dialog" id="modal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="titulo"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="cuerpo">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
			</div>
		</div>
	</div>
</div>


<div class="form-signin container">
	<img class="mb-4" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.svg"" alt="" width="72" height="72">
	<label for="inputEmail" class="sr-only">
		Email address
	</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="" autofocus="">
	<label for="inputPassword" class="sr-only">
		Password
	</label>
	<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
	<button class="btn btn-lg btn-outline-primary btn-block" onclick="login()">
		Sign in
	</button>
	<p class="mt-5 mb-3 text-muted">© 2020</p>
</div>



