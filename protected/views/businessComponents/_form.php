<?php
/* @var $this BusinessComponentsController */
/* @var $model BusinessComponents */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php
	$form = $this->beginWidget('CActiveForm', array(
		'id' => 'business-components-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	));
	?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 70)); ?>
		<?php echo $form->error($model, 'name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
		<?php echo $form->error($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'start'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute' => 'start',
			'model' => $model,
			'options' => array(
				'dateFormat' => 'yy-mm-dd'
			)
		)); ?>
		<?php echo $form->error($model, 'start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'end'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute' => 'end',
			'model' => $model,
			'options' => array(
				'dateFormat' => 'yy-mm-dd'
			)
		)); ?>
		<?php echo $form->error($model, 'end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->businessComponents, 'value_propositions'); ?>
		<?php echo $form->textArea($model->businessComponents, 'value_propositions', array('rows' => 6, 'cols' => 50)); ?>
		<?php echo $form->error($model->businessComponents, 'value_propositions'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->