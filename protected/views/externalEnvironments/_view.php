<?php
/* @var $this ExternalEnvironmentsController */
/* @var $data ExternalEnvironments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->file_id), array('view', 'id'=>$data->file_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('external_environment')); ?>:</b>
	<?php echo CHtml::encode($data->external_environment); ?>
	<br />


</div>