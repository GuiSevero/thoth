<?php
/* @var $this AreaController */
/* @var $data Area */
?>

<div class="view">
	<?php echo CHtml::link(CHtml::encode($data->assunto), array('view', 'id'=>$data->cod_area)); ?>
	<br />
</div>