<?php
/* @var $this ExternalEnvironmentsController */
/* @var $model ExternalEnvironments */

$this->breadcrumbs=array(
	'External Environments'=>array('index'),
	$model->file_id=>array('view','id'=>$model->file_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExternalEnvironments', 'url'=>array('index')),
	array('label'=>'Create ExternalEnvironments', 'url'=>array('create')),
	array('label'=>'View ExternalEnvironments', 'url'=>array('view', 'id'=>$model->file_id)),
	array('label'=>'Manage ExternalEnvironments', 'url'=>array('admin')),
);
?>

<h1>Update ExternalEnvironments <?php echo $model->file_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>