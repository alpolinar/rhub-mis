<?php
/* @var $this TagTypesController */
/* @var $model TagTypes */

$this->breadcrumbs=array(
	'Tag Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TagTypes', 'url'=>array('index')),
	array('label'=>'Manage TagTypes', 'url'=>array('admin')),
);
?>

<h1>Create TagTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>