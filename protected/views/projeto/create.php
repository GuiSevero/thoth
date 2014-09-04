<?php
/* @var $this ProjetoController */
/* @var $model Projeto */

$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Projeto', 'url'=>array('index')),
	array('label'=>'Manage Projeto', 'url'=>array('admin')),
);
?>

<h1>Create Projeto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>