<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->assunto,
);

$this->menu=array(
	array('label'=>'Editar Área', 'url'=>array('update', 'id'=>$model->cod_area)),
	array('label'=>'Deletar Área', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_area),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Adicionar Tema', 'url'=>array('/tema/create', 'id'=>$model->cod_area)),

);
?>

<h1><?php echo $model->assunto; ?></h1>
<table class="table">
<thead>
<th>Assunto</th><th>Tags</th><th>Projetos</th>
</thead>
<tbody>
	<?foreach ($model->temas as $key => $tema): ?>
		<tr>
			<td><?php echo CHtml::link($tema->assunto, array('/tema/view', 'id'=>$tema->cod_tema), array('class'=>'tema')); ?></td>
			<td><?php echo count($tema->tags); ?></td>
			<td><?php echo count($tema->projetos); ?></td>
		</tr>
	<?php endforeach?>
</tbody>
</table>