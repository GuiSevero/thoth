<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->cod_area=>array('view','id'=>$model->cod_area),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Áreas', 'url'=>array('index')),
	array('label'=>'Adicionar Área', 'url'=>array('create')),
	array('label'=>'Editar Área', 'url'=>'#', 'active'=>true),
	array('label'=>'Ver Área', 'url'=>array('view', 'id'=>$model->cod_area)),
	array('label'=>'Gerenciar Área', 'url'=>array('admin')),
);
?>

<h1>Update Area <?php echo $model->cod_area; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>