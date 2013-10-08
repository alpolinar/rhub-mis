<?php
/* @var $this TagsController */
/* @var $model Tags */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php
	$form = $this->beginWidget('CActiveForm', array(
		'id' => 'tags-form',
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
		<?php echo $form->labelEx($model, 'tag_type_id'); ?>
		<?php echo $form->textField($model, 'tag_type_id', array('size' => 20, 'maxlength' => 20)); ?>
		<?php echo $form->error($model, 'tag_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'tag'); ?>
		<?php echo $form->textField($model, 'tag', array('size' => 60, 'maxlength' => 100)); ?>
		<?php echo $form->error($model, 'tag'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->