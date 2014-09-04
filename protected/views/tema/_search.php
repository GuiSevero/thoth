<?php
/* @var $this TemaController */
/* @var $model Tema */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_tema'); ?>
		<?php echo $form->textField($model,'cod_tema'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_area'); ?>
		<?php echo $form->textField($model,'cod_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assunto'); ?>
		<?php echo $form->textField($model,'assunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'texto_disparador'); ?>
		<?php echo $form->textArea($model,'texto_disparador',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagem'); ?>
		<?php echo $form->textField($model,'imagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_usuario'); ?>
		<?php echo $form->textField($model,'cod_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->