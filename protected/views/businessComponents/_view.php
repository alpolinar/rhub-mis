<?php
/* @var $this BusinessComponentsController */
/* @var $data BusinessComponents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->file_id), array('view', 'id'=>$data->file_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value_propositions')); ?>:</b>
	<?php echo CHtml::encode($data->value_propositions); ?>
	<br />


</div>