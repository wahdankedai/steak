<div class="komponenNilais form">
<?php echo $form->create('KomponenNilai');?>
	<fieldset>
 		<legend><?php __('Add KomponenNilai');?></legend>
	<?php
		echo $form->input('tkelas_id');
		echo $form->input('nama');
		echo $form->input('persentase');
		echo $form->input('KartuStudi');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List KomponenNilais', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Tkelases', true), array('controller'=> 'tkelases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Tkelase', true), array('controller'=> 'tkelases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Kartu Studis', true), array('controller'=> 'kartu_studis', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Kartu Studi', true), array('controller'=> 'kartu_studis', 'action'=>'add')); ?> </li>
	</ul>
</div>
