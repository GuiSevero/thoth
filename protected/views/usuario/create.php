<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Usuários', 'url'=>array('/usuario/index')),
	array('label'=>'Adicionar Usuário', 'url'=>'#', 'active'=>true),
	array('label'=>'Gerenciar Usuários', 'url'=>array('/usuario/admin')),
);
?>

<h1>Create Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>