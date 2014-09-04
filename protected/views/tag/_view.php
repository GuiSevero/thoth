<?php
/* @var $this TagController */
/* @var $data Tag */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_tag')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_tag), array('view', 'id'=>$data->cod_tag)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_tema')); ?>:</b>
	<?php echo CHtml::encode($data->cod_tema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />


</div>