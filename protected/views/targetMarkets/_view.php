<?php
/* @var $this TargetMarketsController */
/* @var $data TargetMarkets */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->file_id), array('view', 'id'=>$data->file_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_market')); ?>:</b>
	<?php echo CHtml::encode($data->target_market); ?>
	<br />


</div>