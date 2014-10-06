<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">    
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/site.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/token-input.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/token-input-facebook.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>



<body>

 <div class="navbar navbar-default" id="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <?php echo CHtml::link('Toth', array('/site/index'), array('class'=>'navbar-brand')); ?>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
  	<?php $this->widget('zii.widgets.CMenu',array(
  			//'itemCssClass'=>"teste",
  			'htmlOptions'=>array('class'=>"nav navbar-nav"),
  			'activateParents'=>true,
  			//'activateItems'=>true,
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Áreas', 'url'=>array('/area/index')),
				array('label'=>'Temas', 'url'=>array('/tema/index')),
				array('label'=>'Usuários', 'url'=>array('/usuario/index')),
				array('label'=>'Tags', 'url'=>array('/tag/index')),
				array('label'=>'Projetos', 'url'=>array('/projeto/index')),
				array('label'=>'Contribuições', 'url'=>array('/contribuicao/index')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name .')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
    <ul class="nav navbar-nav navbar-right">
    	<?php if(count($this->menu) > 0): ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
        <?php
    	$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'dropdown-menu'),
		));
		?>
      </li>
      <?php endif; ?>
      <li>
    	<form class="navbar-form navbar-left">
      	<input type="text" class="form-control col-lg-8" placeholder="Search">
    	</form>      
    </li>
    </ul>
  </div>
</div><!-- FIM DO MENU PRINCIPAL -->

<div id="header">
	<h1>Toth</h1>
</div>

    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'htmlOptions'=>array('class'=>"breadcrumb"),
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<div class="container">
		<?php echo $content; ?>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <script>var baseUrl = "<?php echo Yii::app()->request->baseUrl; ?>"; console.log(baseUrl);</script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tinymce/tinymce.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.tokeninput.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tags.js"></script>
  </body>
</html>