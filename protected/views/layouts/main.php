<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
<!-- 	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" /> 
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />  -->
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container"  id="page">

<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand"><?php echo CHtml::encode(Yii::app()->name); ?></a>
      <div class = "nav-collapse">
      	<ul class = "nav">
      		<li><a href = "<?php 
      		echo $this->createUrl('site/index')?>">Home</a></li>
      		<li><a href = "<?php echo $this->createUrl('site/page',array('view'=>'about'))?>">About</a></li>
      		<li><a href = "<?php echo $this->createUrl('/site/contact')?>">Contact</a></li>
      		  <?php 
      		  if (Yii::app()->user->isGuest){
      		  ?>
      	<li><a href = "<?php echo $this->createUrl('site/login')?>">Login</a></li>
      		<?php } else{?>
      			<li><a href = "<?php echo $this->createUrl('site/logout')?>">Logout</a></li>
      	    <?php	} ?>
      		
      		
      		
      	</ul>
      </div
    </div>
  </div>
</div>

	<!-- <div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div> --><!-- header -->

	<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	</div>
	<div class="clear"></div>

<hr />
	<div id="footer" class="vf">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
