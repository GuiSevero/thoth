<?php
/* @var $this ContribuicaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contribuicaos',
);

$this->menu=array(
	array('label'=>'Create Contribuicao', 'url'=>array('create')),
	array('label'=>'Manage Contribuicao', 'url'=>array('admin')),
);
?>

<h1>Contribuicaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
