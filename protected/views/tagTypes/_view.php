<?php
/* @var $this TagTypesController */
/* @var $data TagTypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tag_type')); ?>:</b>
	<?php echo CHtml::encode($data->tag_type); ?>
	<br />


</div>