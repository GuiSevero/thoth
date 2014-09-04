<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_usuario), array('view', 'id'=>$data->cod_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_completo')); ?>:</b>
	<?php echo CHtml::encode($data->nome_completo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sobrenome')); ?>:</b>
	<?php echo CHtml::encode($data->sobrenome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senha')); ?>:</b>
	<?php echo CHtml::encode($data->senha); ?>
	<br />


</div>