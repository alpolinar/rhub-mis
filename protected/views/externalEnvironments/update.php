<?php
/* @var $this ExternalEnvironmentsController */
/* @var $model ExternalEnvironments */

$this->breadcrumbs = array(
	'External Environments' => array('index'),
	$model->name => array('view', 'id' => $model->id),
	'Update',
);

$this->menu = array(
	array('label' => 'List ExternalEnvironments', 'url' => array('index')),
	array('label' => 'Create ExternalEnvironments', 'url' => array('create')),
	array('label' => 'View ExternalEnvironments', 'url' => array('view', 'id' => $model->id)),
	array('label' => 'Manage ExternalEnvironments', 'url' => array('admin')),
);
?>

<h1>Update ExternalEnvironments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>