<?php
/* @var $this PeopleController */
/* @var $model People */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php
	$form = $this->beginWidget('CActiveForm', array(
		'id' => 'people-form',
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
		<?php echo $form->labelEx($model, 'id'); ?>
		<?php echo $form->textField($model, 'id', array('size' => 20, 'maxlength' => 20)); ?>
		<?php echo $form->error($model, 'id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 70)); ?>
		<?php echo $form->error($model, 'name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model->people, 'population'); ?>
		<?php echo $form->textField($model->people, 'population'); ?>
		<?php echo $form->error($model->people, 'population'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->people, 'age_start'); ?>
		<?php echo $form->textField($model->people, 'age_start'); ?>
		<?php echo $form->error($model->people, 'age_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->people, 'age_end'); ?>
		<?php echo $form->textField($model->people, 'age_end'); ?>
		<?php echo $form->error($model->people, 'age_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->people, 'country'); ?>
		<?php echo $form->textField($model->people, 'country', array('size' => 2, 'maxlength' => 2)); ?>
		<?php echo $form->error($model->people, 'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->people, 'state'); ?>
		<?php echo $form->textField($model->people, 'state', array('size' => 5, 'maxlength' => 5)); ?>
		<?php echo $form->error($model->people, 'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->people, 'city'); ?>
		<?php echo $form->textField($model->people, 'city', array('size' => 60, 'maxlength' => 60)); ?>
		<?php echo $form->error($model->people, 'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->people, 'zip_code'); ?>
		<?php echo $form->textField($model->people, 'zip_code', array('size' => 10, 'maxlength' => 10)); ?>
		<?php echo $form->error($model->people, 'zip_code'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->