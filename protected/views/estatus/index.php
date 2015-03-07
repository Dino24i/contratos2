<?php
$this->pageCaption='Estatus';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription='Listar';

$this->breadcrumbs=array(
	'Estatus',
);

$this->menu=array(
	array('label'=>'Crear Estatus','url'=>array('create')),
	array('label'=>'Administrar Estatus','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
