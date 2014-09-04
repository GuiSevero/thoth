<?php
/* @var $this ProjetoController */
/* @var $model Projeto */

$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	$model->cod_projeto=>array('view','id'=>$model->cod_projeto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Projeto', 'url'=>array('index')),
	array('label'=>'Create Projeto', 'url'=>array('create')),
	array('label'=>'View Projeto', 'url'=>array('view', 'id'=>$model->cod_projeto)),
	array('label'=>'Manage Projeto', 'url'=>array('admin')),
);
?>

<h1>Update Projeto <?php echo $model->cod_projeto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>