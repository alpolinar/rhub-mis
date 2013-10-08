<?php
/* @var $this TargetMarketsController */
/* @var $model TargetMarkets */

$this->breadcrumbs = array(
	'Target Markets' => array('index'),
	$model->file_id => array('view', 'id' => $model->file_id),
	'Update',
);

$this->menu = array(
	array('label' => 'List TargetMarkets', 'url' => array('index')),
	array('label' => 'Create TargetMarkets', 'url' => array('create')),
	array('label' => 'View TargetMarkets', 'url' => array('view', 'id' => $model->file_id)),
	array('label' => 'Manage TargetMarkets', 'url' => array('admin')),
);
?>

<h1>Update TargetMarkets <?php echo $model->file_id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>