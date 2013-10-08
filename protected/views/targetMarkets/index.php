<?php
/* @var $this TargetMarketsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Target Markets',
);

$this->menu = array(
	array('label' => 'Create TargetMarkets', 'url' => array('create')),
	array('label' => 'Manage TargetMarkets', 'url' => array('admin')),
);
?>

<h1>Target Markets</h1>

<?php
$this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
));
?>
