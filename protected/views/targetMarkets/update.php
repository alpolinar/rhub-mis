<?php
/* @var $this TargetMarketsController */
/* @var $model TargetMarkets */

$this->breadcrumbs = array(
	'Target Markets' => array('index'),
	$model->name => array('view', 'id' => $model->id),
	'Update',
);

$this->menu = array(
	array('label' => 'List TargetMarkets', 'url' => array('index')),
	array('label' => 'Create TargetMarkets', 'url' => array('create')),
	array('label' => 'View TargetMarkets', 'url' => array('view', 'id' => $model->id)),
	array('label' => 'Manage TargetMarkets', 'url' => array('admin')),
);
?>

<h1>Update TargetMarkets <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>