<?php
/* @var $this TemaController */
/* @var $data Tema */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_tema')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_tema), array('view', 'id'=>$data->cod_tema)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_area')); ?>:</b>
	<?php echo CHtml::encode($data->cod_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assunto')); ?>:</b>
	<?php echo CHtml::encode($data->assunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto_disparador')); ?>:</b>
	<?php echo CHtml::encode($data->texto_disparador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagem')); ?>:</b>
	<?php echo CHtml::encode($data->imagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->cod_usuario); ?>
	<br />


</div>