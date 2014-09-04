<?php
/* @var $this TagController */
/* @var $model Tag */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_tag'); ?>
		<?php echo $form->textField($model,'cod_tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_tema'); ?>
		<?php echo $form->textField($model,'cod_tema'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->