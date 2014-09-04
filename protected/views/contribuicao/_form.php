<?php
/* @var $this ContribuicaoController */
/* @var $model Contribuicao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contribuicao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_projeto'); ?>
		<?php echo $form->textField($model,'cod_projeto'); ?>
		<?php echo $form->error($model,'cod_projeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'local'); ?>
		<?php echo $form->textField($model,'local'); ?>
		<?php echo $form->error($model,'local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_usuario'); ?>
		<?php echo $form->textField($model,'cod_usuario'); ?>
		<?php echo $form->error($model,'cod_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_criacao'); ?>
		<?php echo $form->textField($model,'data_criacao'); ?>
		<?php echo $form->error($model,'data_criacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->