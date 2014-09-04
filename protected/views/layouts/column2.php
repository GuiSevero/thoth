<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>


<div class="row">
	

	<div class="col-md-10">
		<?php echo $content; ?>
	</div>


	<div class="col-md-2">

		<?php
			$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-pills nav-stacked'),
		));
		?>
	</div>


</div>
<?php $this->endContent(); ?>