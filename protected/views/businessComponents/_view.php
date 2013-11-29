<?php
/* @var $this BusinessComponentsController */
/* @var $data BusinessComponents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id' => $data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value_propositions')); ?>:</b>
	<?php echo CHtml::encode($data->businessComponents->value_propositions); ?>
	<br />


</div>