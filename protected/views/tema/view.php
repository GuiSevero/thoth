<?php
/* @var $this TemaController */
/* @var $model Tema */

$this->breadcrumbs=array(
	'Temas'=>array('index'),
	$model->cod_tema,
);

$this->menu=array(
	array('label'=>'List Tema', 'url'=>array('index')),
	array('label'=>'Create Tema', 'url'=>array('create')),
	array('label'=>'Update Tema', 'url'=>array('update', 'id'=>$model->cod_tema)),
	array('label'=>'Delete Tema', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_tema),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tema', 'url'=>array('admin')),
);
?>

<h1>View Tema #<?php echo $model->cod_tema; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_tema',
		'cod_area',
		'assunto',
		'texto_disparador',
		'imagem',
		'cod_usuario',
	),
)); ?>
