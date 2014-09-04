<?php
/* @var $this ProjetoController */
/* @var $model Projeto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'projeto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_tag'); ?>
		<?php echo $form->textField($model,'cod_tag'); ?>
		<?php echo $form->error($model,'cod_tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_usuario'); ?>
		<?php echo $form->textField($model,'cod_usuario'); ?>
		<?php echo $form->error($model,'cod_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->