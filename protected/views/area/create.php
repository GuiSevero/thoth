<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Áreas', 'url'=>array('index')),
	array('label'=>'Adicionar Área', 'url'=>'#', 'active'=>true),
	array('label'=>'Gerenciar Áreas', 'url'=>array('admin')),
);
?>

<h1>Create Area</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>