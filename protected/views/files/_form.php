<?php
/* @var $this FilesController */
/* @var $model Files */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php
	$form = $this->beginWidget('CActiveForm', array(
		'id' => 'files-form',
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
		<?php echo $form->labelEx($model, 'file_type_id'); ?>
		<?php echo $form->textField($model, 'file_type_id', array('size' => 20, 'maxlength' => 20)); ?>
		<?php echo $form->error($model, 'file_type_id'); ?>
	</div>

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
		<?php echo $form->textField($model, 'start'); ?>
		<?php echo $form->error($model, 'start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'end'); ?>
		<?php echo $form->textField($model, 'end'); ?>
		<?php echo $form->error($model, 'end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'created'); ?>
		<?php echo $form->textField($model, 'created'); ?>
		<?php echo $form->error($model, 'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'updated'); ?>
		<?php echo $form->textField($model, 'updated'); ?>
		<?php echo $form->error($model, 'updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'user_id'); ?>
		<?php echo $form->textField($model, 'user_id', array('size' => 19, 'maxlength' => 19)); ?>
		<?php echo $form->error($model, 'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->