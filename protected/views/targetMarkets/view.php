<?php
/* @var $this TargetMarketsController */
/* @var $model TargetMarkets */

$this->breadcrumbs = array(
	'Target Markets' => array('index'),
	$model->name,
);

$this->menu = array(
	array('label' => 'List TargetMarkets', 'url' => array('index')),
	array('label' => 'Create TargetMarkets', 'url' => array('create')),
	array('label' => 'Update TargetMarkets', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Delete TargetMarkets', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
	array('label' => 'Manage TargetMarkets', 'url' => array('admin')),
);
?>

<h1>View TargetMarkets #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'name',
		'description',
		'start',
		'end',
		'targetMarkets.target_market',
	),
));
?>
