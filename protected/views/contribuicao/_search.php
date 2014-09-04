<?php
/* @var $this ContribuicaoController */
/* @var $model Contribuicao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_contribuicao'); ?>
		<?php echo $form->textField($model,'cod_contribuicao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_projeto'); ?>
		<?php echo $form->textField($model,'cod_projeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'local'); ?>
		<?php echo $form->textField($model,'local'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_usuario'); ?>
		<?php echo $form->textField($model,'cod_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_criacao'); ?>
		<?php echo $form->textField($model,'data_criacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->