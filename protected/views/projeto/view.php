<?php
/* @var $this ProjetoController */
/* @var $model Projeto */

$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	$model->cod_projeto,
);

$this->menu=array(
	array('label'=>'List Projeto', 'url'=>array('index')),
	array('label'=>'Create Projeto', 'url'=>array('create')),
	array('label'=>'Update Projeto', 'url'=>array('update', 'id'=>$model->cod_projeto)),
	array('label'=>'Delete Projeto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_projeto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Projeto', 'url'=>array('admin')),
);
?>

<h1>View Projeto #<?php echo $model->cod_projeto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_projeto',
		'descricao',
		'cod_tag',
		'cod_usuario',
	),
)); ?>
