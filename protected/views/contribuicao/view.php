<?php
/* @var $this ContribuicaoController */
/* @var $model Contribuicao */

$this->breadcrumbs=array(
	'Contribuicaos'=>array('index'),
	$model->cod_contribuicao,
);

$this->menu=array(
	array('label'=>'List Contribuicao', 'url'=>array('index')),
	array('label'=>'Create Contribuicao', 'url'=>array('create')),
	array('label'=>'Update Contribuicao', 'url'=>array('update', 'id'=>$model->cod_contribuicao)),
	array('label'=>'Delete Contribuicao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_contribuicao),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contribuicao', 'url'=>array('admin')),
);
?>

<h1>View Contribuicao #<?php echo $model->cod_contribuicao; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_contribuicao',
		'cod_projeto',
		'local',
		'cod_usuario',
		'data_criacao',
		'texto',
	),
)); ?>
