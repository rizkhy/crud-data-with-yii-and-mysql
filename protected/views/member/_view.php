<?php
/* @var $this MemberController */
/* @var $data Member */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_member')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_member), array('view', 'id'=>$data->id_member)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_member')); ?>:</b>
	<?php echo CHtml::encode($data->nama_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_member')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir_member')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_member')); ?>:</b>
	<?php echo CHtml::encode($data->email_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telp_member')); ?>:</b>
	<?php echo CHtml::encode($data->telp_member); ?>
	<br />


</div>