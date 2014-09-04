<?php
/* @var $this ProjetoController */
/* @var $model Projeto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_projeto'); ?>
		<?php echo $form->textField($model,'cod_projeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_tag'); ?>
		<?php echo $form->textField($model,'cod_tag'); ?>
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