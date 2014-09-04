<?php
/* @var $this ContribuicaoController */
/* @var $data Contribuicao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_contribuicao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_contribuicao), array('view', 'id'=>$data->cod_contribuicao)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_projeto')); ?>:</b>
	<?php echo CHtml::encode($data->cod_projeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local')); ?>:</b>
	<?php echo CHtml::encode($data->local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->cod_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_criacao')); ?>:</b>
	<?php echo CHtml::encode($data->data_criacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />


</div>