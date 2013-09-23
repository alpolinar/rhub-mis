<?php
/* @var $this BusinessComponentsController */
/* @var $model BusinessComponents */

$this->breadcrumbs=array(
	'Business Components'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BusinessComponents', 'url'=>array('index')),
	array('label'=>'Manage BusinessComponents', 'url'=>array('admin')),
);
?>

<h1>Create BusinessComponents</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>