<?php
/* @var $this TemaController */
/* @var $model Tema */

$this->breadcrumbs=array(
	'Areas'=>array('/area/index'),
	$model->area->assunto=>array('/area/view', 'id'=>$model->cod_area),
	$model->assunto,
);

$this->menu=array(
	array('label'=>'Adicionar Tema', 'url'=>array('create')),
	array('label'=>'Editar Tema', 'url'=>array('update', 'id'=>$model->cod_tema)),
	array('label'=>'Deletar Tema', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_tema),'confirm'=>'Tem certeza que deseja deletar item?')),
	array('label'=>'Gerenciar Temas', 'url'=>array('admin')),
);
?>

<h2><?php echo $model->assunto; ?></h2>
<h5><?php echo $model->area->assunto; ?></h5>

<h4>Texto Disparador</h4>
<p>
<?php echo $model->texto_disparador; ?>
</p>
<?php echo CHtml::image($model->imagem, $model->assunto, array('class'=>'')); ?>

<h1> Tags</h1>
<div class="panel-group" id="accordion">
<?php foreach ($model->tags as $tag): ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <?php echo $tag->nome ?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
		<?php foreach ($tag->projetos as $projeto): ?>
			<?php echo CHtml::link(substr($projeto->descricao, 0, 35), array('/projeto/view', 'id'=>$projeto->cod_projeto)); ?><hr>
		<?php endforeach; ?>

		<?php echo CHtml::link('Adicionar Projeto', array('/projeto/create', 'id'=>$tag->cod_tag), array('class'=>'btn btn-primary btn-small')); ?>
      </div>
    </div>
  </div>
 <?php endforeach ?>
</div>
