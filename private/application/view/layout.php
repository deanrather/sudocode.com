<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title><?php echo $tpl->get('pageTitle') ?></title>
	<?php $tpl->loadView('common/styles'); ?>
</head>
<body>
	<header>
		<?php $tpl->loadView('common/top-menu'); ?>
		<?php $tpl->loadView('common/header'); ?>
	</header>
	
	<section id="content">
		<?php $tpl->loadView('page/'.$tpl->get('pageView')); ?>
	</section>
	
	<?php $tpl->loadView('common/footer'); ?>
	<?php $tpl->loadView('common/scripts'); ?>
</body>
</html>