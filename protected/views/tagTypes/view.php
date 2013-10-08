<?php
/* @var $this TagTypesController */
/* @var $model TagTypes */

$this->breadcrumbs = array(
	'Tag Types' => array('index'),
	$model->id,
);

$this->menu = array(
	array('label' => 'List TagTypes', 'url' => array('index')),
	array('label' => 'Create TagTypes', 'url' => array('create')),
	array('label' => 'Update TagTypes', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Delete TagTypes', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
	array('label' => 'Manage TagTypes', 'url' => array('admin')),
);
?>

<h1>View TagTypes #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'id',
		'tag_type',
	),
));
?>
