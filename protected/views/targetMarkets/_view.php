<?php
/* @var $this TargetMarketsController */
/* @var $data TargetMarkets */
?>

<div class="view">
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('targetMarkets.target_market')); ?>:</b>
	<?php echo CHtml::encode($data->targetMarkets->target_market); ?>
	<br />
	
</div>