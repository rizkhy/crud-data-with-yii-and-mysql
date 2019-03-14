<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_member'); ?>
		<?php echo $form->textField($model,'id_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_member'); ?>
		<?php echo $form->textField($model,'nama_member',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_member'); ?>
		<?php echo $form->textField($model,'alamat_member',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_lahir_member'); ?>
		<?php echo $form->textField($model,'tgl_lahir_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_member'); ?>
		<?php echo $form->textField($model,'email_member',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telp_member'); ?>
		<?php echo $form->textField($model,'telp_member',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->