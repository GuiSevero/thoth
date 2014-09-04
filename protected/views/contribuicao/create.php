<?php
/* @var $this ContribuicaoController */
/* @var $model Contribuicao */

$this->breadcrumbs=array(
	'Contribuicaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contribuicao', 'url'=>array('index')),
	array('label'=>'Manage Contribuicao', 'url'=>array('admin')),
);
?>

<h1>Create Contribuicao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>