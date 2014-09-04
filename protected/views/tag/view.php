<?php
/* @var $this TagController */
/* @var $model Tag */

$this->breadcrumbs=array(
	'Tags'=>array('index'),
	$model->cod_tag,
);

$this->menu=array(
	array('label'=>'List Tag', 'url'=>array('index')),
	array('label'=>'Create Tag', 'url'=>array('create')),
	array('label'=>'Update Tag', 'url'=>array('update', 'id'=>$model->cod_tag)),
	array('label'=>'Delete Tag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_tag),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tag', 'url'=>array('admin')),
);
?>

<h1>View Tag #<?php echo $model->cod_tag; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_tag',
		'cod_tema',
		'nome',
	),
)); ?>
