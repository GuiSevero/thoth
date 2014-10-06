<?php
/* @var $this ProjetoController */
/* @var $model Projeto */

$this->breadcrumbs=array(
	'Areas'=>array('/area/index'),
	$model->tag->tema->area->assunto=>array('/area/view', 'id'=>$model->tag->tema->area->cod_area),
	$model->tag->tema->assunto=>array('/tema/view', 'id'=>$model->tag->tema->cod_tema),
	$model->tag->nome,
	$model->cod_projeto,
);

$this->menu=array(
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->cod_projeto)),
	array('label'=>'Deletar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_projeto),'confirm'=>'Are you sure you want to delete this item?')),
);


$url = $this->createUrl('/contribuicao/create', array('id'=>$model->cod_projeto));

Yii::app()->clientScript->registerScript('contribuicao', "

$('#send-contrib').click(function(){

$.post('{$url}', {Contribuicao: {texto: $('#Contribuicao_texto').val()}}, function(data){
	$('#contrib-list').append(data);
})

});

");

?>

<h2><?php echo $model->tag->tema->assunto; ?></h2>
<h4><?php echo $model->tag->nome; ?></h4>

<p> <?php echo $model->descricao; ?> </p>


<div id="contrib-list">
<?php 

foreach ($model->contribuicoes as $key => $cont){
	$this->renderPartial('/projeto/_contribuicao', array('cont'=>$cont));	
}
  
?>
</div>

<hr>
 <div class="form-group">
    <label for="contribuicao">Contribuir</label>
    <textarea class="form-control" id="Contribuicao_texto" name="Contribuicao[texto]" data-projeto="<?php echo $model->cod_projeto?>"></textarea>

  </div>
  <div class="form-group">
   <button class="btn btn-primary" id="send-contrib" class="form-control">Enviar</button>
  </div>
  