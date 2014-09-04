<?php
/* @var $this AreaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Areas',
);

$this->menu=array(
	array('label'=>'Listar Áreas', 'url'=>'#', 'active'=>true),
	array('label'=>'Adicionar Área', 'url'=>array('create')),
	array('label'=>'Gerenciar Áreas', 'url'=>array('admin')),
);
?>

<h1>Areas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
