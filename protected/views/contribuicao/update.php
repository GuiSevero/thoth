<?php
/* @var $this ContribuicaoController */
/* @var $model Contribuicao */

$this->breadcrumbs=array(
	'Contribuicaos'=>array('index'),
	$model->cod_contribuicao=>array('view','id'=>$model->cod_contribuicao),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contribuicao', 'url'=>array('index')),
	array('label'=>'Create Contribuicao', 'url'=>array('create')),
	array('label'=>'View Contribuicao', 'url'=>array('view', 'id'=>$model->cod_contribuicao)),
	array('label'=>'Manage Contribuicao', 'url'=>array('admin')),
);
?>

<h1>Update Contribuicao <?php echo $model->cod_contribuicao; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>