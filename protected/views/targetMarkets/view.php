<?php
/* @var $this TargetMarketsController */
/* @var $model TargetMarkets */

$this->breadcrumbs = array(
	'Target Markets' => array('index'),
	$model->file_id,
);

$this->menu = array(
	array('label' => 'List TargetMarkets', 'url' => array('index')),
	array('label' => 'Create TargetMarkets', 'url' => array('create')),
	array('label' => 'Update TargetMarkets', 'url' => array('update', 'id' => $model->file_id)),
	array('label' => 'Delete TargetMarkets', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->file_id), 'confirm' => 'Are you sure you want to delete this item?')),
	array('label' => 'Manage TargetMarkets', 'url' => array('admin')),
);
?>

<h1>View TargetMarkets #<?php echo $model->file_id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'file_id',
		'target_market',
	),
));
?>
