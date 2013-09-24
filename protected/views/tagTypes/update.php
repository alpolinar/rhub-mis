<?php
/* @var $this TagTypesController */
/* @var $model TagTypes */

$this->breadcrumbs=array(
	'Tag Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TagTypes', 'url'=>array('index')),
	array('label'=>'Create TagTypes', 'url'=>array('create')),
	array('label'=>'View TagTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TagTypes', 'url'=>array('admin')),
);
?>

<h1>Update TagTypes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>