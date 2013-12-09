<?php
/* @var $this ExternalEnvironmentsController */
/* @var $model ExternalEnvironments */

$this->breadcrumbs = array(
	'External Environments' => array('index'),
	$model->name,
);

$this->menu = array(
	array('label' => 'List ExternalEnvironments', 'url' => array('index')),
	array('label' => 'Create ExternalEnvironments', 'url' => array('create')),
	array('label' => 'Update ExternalEnvironments', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Delete ExternalEnvironments', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
	array('label' => 'Manage ExternalEnvironments', 'url' => array('admin')),
);
?>

<h1>View ExternalEnvironments #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'name',
		'description',
		'start',
		'end',
		'externalEnvironments.external_environment',
	),
));
?>
