<?php
/* @var $this ExternalEnvironmentsController */
/* @var $data ExternalEnvironments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id' => $data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('external_environment')); ?>:</b>
	<?php echo CHtml::encode($data->externalEnvironments->external_environment); ?>
	<br />


</div>