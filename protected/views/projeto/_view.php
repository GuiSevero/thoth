<?php
/* @var $this ProjetoController */
/* @var $data Projeto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_projeto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_projeto), array('view', 'id'=>$data->cod_projeto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_tag')); ?>:</b>
	<?php echo CHtml::encode($data->cod_tag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->cod_usuario); ?>
	<br />


</div>