<?php
/* @var $this PeopleController */
/* @var $model People */

$this->breadcrumbs = array(
	'Peoples' => array('index'),
	$model->file_id => array('view', 'id' => $model->file_id),
	'Update',
);

$this->menu = array(
	array('label' => 'List People', 'url' => array('index')),
	array('label' => 'Create People', 'url' => array('create')),
	array('label' => 'View People', 'url' => array('view', 'id' => $model->file_id)),
	array('label' => 'Manage People', 'url' => array('admin')),
);
?>

<h1>Update People <?php echo $model->file_id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>