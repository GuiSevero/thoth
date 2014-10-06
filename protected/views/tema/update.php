<?php
/* @var $this TemaController */
/* @var $model Tema */

$this->breadcrumbs=array(
	'Temas'=>array('index'),
	$model->assunto=>array('view','id'=>$model->cod_tema),
	'Editar',
);

$this->menu=array(
	array('label'=>'List Tema', 'url'=>array('index')),
	array('label'=>'Create Tema', 'url'=>array('create')),
	array('label'=>'View Tema', 'url'=>array('view', 'id'=>$model->cod_tema)),
	array('label'=>'Manage Tema', 'url'=>array('admin')),
);
?>

<h3><?php echo $model->assunto; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>