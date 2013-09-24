<?php
/* @var $this PeopleController */
/* @var $data People */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->file_id), array('view', 'id'=>$data->file_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('population')); ?>:</b>
	<?php echo CHtml::encode($data->population); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age_start')); ?>:</b>
	<?php echo CHtml::encode($data->age_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age_end')); ?>:</b>
	<?php echo CHtml::encode($data->age_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('zip_code')); ?>:</b>
	<?php echo CHtml::encode($data->zip_code); ?>
	<br />

	*/ ?>

</div>