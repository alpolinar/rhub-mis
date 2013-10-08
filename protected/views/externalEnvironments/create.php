<?php
/* @var $this ExternalEnvironmentsController */
/* @var $model ExternalEnvironments */

$this->breadcrumbs = array(
	'External Environments' => array('index'),
	'Create',
);

$this->menu = array(
	array('label' => 'List ExternalEnvironments', 'url' => array('index')),
	array('label' => 'Manage ExternalEnvironments', 'url' => array('admin')),
);
?>

<h1>Create ExternalEnvironments</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>