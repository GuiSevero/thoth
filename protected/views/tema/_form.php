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
	
	<div class="bs-callout bs-callout-danger">
		<p>Campos com <code>*</code> são orbrigatórios.</p>
	</div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'assunto'); ?>
		<?php echo $form->textField($model,'assunto', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'assunto'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'texto_disparador'); ?>
		<?php echo $form->textArea($model,'texto_disparador',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'texto_disparador'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tags'); ?>
		<div id="tags-list">
			<span id="tags-loader"></span>
			
		</div>
		<?php echo $form->error($model,'tags'); ?>
	</div>
	

	<div class="form-group">
		<?php echo $form->labelEx($model,'imagem'); ?>
		<?php echo $form->fileField($model,'imagem', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'imagem'); ?>
	</div>



	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
