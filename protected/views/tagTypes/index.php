<?php
/* @var $this TagTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Tag Types',
);

$this->menu = array(
	array('label' => 'Create TagTypes', 'url' => array('create')),
	array('label' => 'Manage TagTypes', 'url' => array('admin')),
);
?>

<h1>Tag Types</h1>

<?php
$this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
));
?>
