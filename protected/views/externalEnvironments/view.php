<?php
/* @var $this ExternalEnvironmentsController */
/* @var $model ExternalEnvironments */

$this->breadcrumbs=array(
	'External Environments'=>array('index'),
	$model->file_id,
);

$this->menu=array(
	array('label'=>'List ExternalEnvironments', 'url'=>array('index')),
	array('label'=>'Create ExternalEnvironments', 'url'=>array('create')),
	array('label'=>'Update ExternalEnvironments', 'url'=>array('update', 'id'=>$model->file_id)),
	array('label'=>'Delete ExternalEnvironments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->file_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExternalEnvironments', 'url'=>array('admin')),
);
?>

<h1>View ExternalEnvironments #<?php echo $model->file_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'file_id',
		'external_environment',
	),
)); ?>
