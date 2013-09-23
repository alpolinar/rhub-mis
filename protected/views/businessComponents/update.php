<?php
/* @var $this BusinessComponentsController */
/* @var $model BusinessComponents */

$this->breadcrumbs=array(
	'Business Components'=>array('index'),
	$model->file_id=>array('view','id'=>$model->file_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BusinessComponents', 'url'=>array('index')),
	array('label'=>'Create BusinessComponents', 'url'=>array('create')),
	array('label'=>'View BusinessComponents', 'url'=>array('view', 'id'=>$model->file_id)),
	array('label'=>'Manage BusinessComponents', 'url'=>array('admin')),
);
?>

<h1>Update BusinessComponents <?php echo $model->file_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>