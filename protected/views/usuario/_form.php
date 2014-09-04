<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome'); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_completo'); ?>
		<?php echo $form->textField($model,'nome_completo'); ?>
		<?php echo $form->error($model,'nome_completo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sobrenome'); ?>
		<?php echo $form->textField($model,'sobrenome'); ?>
		<?php echo $form->error($model,'sobrenome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roles'); ?>
		<?php  echo $form->dropDownList($model,'roles', array('aluno'=>'Aluno','professor'=>'Professor')); ?>
		<?php echo $form->error($model,'roles'); ?>
	</div>

<?php if($model->isNewRecord): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>
<?php endif; ?>>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->