<?php
/* @var $this BusinessComponentsController */
/* @var $model BusinessComponents */

$this->breadcrumbs = array(
	'Business Components' => array('index'),
	$model->name,
);

$this->menu = array(
	array('label' => 'List BusinessComponents', 'url' => array('index')),
	array('label' => 'Create BusinessComponents', 'url' => array('create')),
	array('label' => 'Update BusinessComponents', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Delete BusinessComponents', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
	array('label' => 'Manage BusinessComponents', 'url' => array('admin')),
);
?>

<h1>View BusinessComponents #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'name',
		'description',
		'start',
		'end',
		'businessComponents.value_propositions',
	),
));

?>
