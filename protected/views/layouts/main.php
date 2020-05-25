<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon//favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon//favicon-16x16.png">
	<link rel="manifest" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon//site.webmanifest">
	<link rel="mask-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon//safari-pinned-tab.svg" color="#5bbad5">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap.min.css" media="screen, projection">

	<script>
		var baseUrl = '<?php echo Yii::app()->request->baseUrl; ?>';
	</script>

	<script src="https://code.jquery.com/jquery-3.5.0.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap/bootstrap.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body class="d-flex flex-column h-100" cz-shortcut-listen="true">
	<?php echo $content; ?>
</body>
</html>
