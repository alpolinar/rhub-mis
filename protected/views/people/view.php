<?php
/* @var $this PeopleController */
/* @var $model People */

$this->breadcrumbs=array(
	'Peoples'=>array('index'),
	$model->file_id,
);

$this->menu=array(
	array('label'=>'List People', 'url'=>array('index')),
	array('label'=>'Create People', 'url'=>array('create')),
	array('label'=>'Update People', 'url'=>array('update', 'id'=>$model->file_id)),
	array('label'=>'Delete People', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->file_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage People', 'url'=>array('admin')),
);
?>

<h1>View People #<?php echo $model->file_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'file_id',
		'population',
		'age_start',
		'age_end',
		'country',
		'state',
		'city',
		'zip_code',
	),
)); ?>
