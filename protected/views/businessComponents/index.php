<?php
/* @var $this BusinessComponentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Business Components',
);

$this->menu=array(
	array('label'=>'Create BusinessComponents', 'url'=>array('create')),
	array('label'=>'Manage BusinessComponents', 'url'=>array('admin')),
);
?>

<h1>Business Components</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
