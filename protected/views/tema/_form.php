<?php
/* @var $this TemaController */
/* @var $model Tema */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tema-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'assunto'); ?>
		<?php echo $form->textField($model,'assunto'); ?>
		<?php echo $form->error($model,'assunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto_disparador'); ?>
		<?php echo $form->textArea($model,'texto_disparador',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'texto_disparador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagem'); ?>
		<?php echo $form->textField($model,'imagem'); ?>
		<?php echo $form->error($model,'imagem'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->