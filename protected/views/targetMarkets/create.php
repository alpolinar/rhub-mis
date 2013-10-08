<?php
/* @var $this TargetMarketsController */
/* @var $model TargetMarkets */

$this->breadcrumbs = array(
	'Target Markets' => array('index'),
	'Create',
);

$this->menu = array(
	array('label' => 'List TargetMarkets', 'url' => array('index')),
	array('label' => 'Manage TargetMarkets', 'url' => array('admin')),
);
?>

<h1>Create TargetMarkets</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>