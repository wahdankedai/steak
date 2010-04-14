<div class="tfakultases index grid_12 alpha " id="content">
	<div class="box">
		<h2 class="section_name"><span class="section_name_span"><?php __('Fakultas');?></span></h2>
<?php echo $form->create('Filter', array('url'=>'/tfakultases/index', 'class'=>'filter'))?>
<table class="filter">
	<tr>
		<td>
			<?php echo $form->input('kode', array('label'=>'Singkatan', 'div'=>'filter', 'fieldset'=>false))?>
		</td>
		<td>
			<?php echo $form->input('nama', array('label'=>'Nama', 'div'=>'filter', 'fieldset'=>false))?>
		</td>
		<td>
			<label>&nbsp;</label>
			<?php echo $form->submit('Filter') ?>
		</td>
	</tr>
</table>
</form>

<table cellpadding="0" cellspacing="0" class="Design">
<thead>
<tr>
	<th><?php __('Kode');?></th>
	<th><?php __('Singkatan');?></th>
	<th><?php __('Nama');?></th>
	<th class="actions"><?php __('Aksi');?></th>
</tr>
</thead>
<tbody>
<?php
$i = 0;
foreach ($tfakultases as $tfakultase):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tfakultase['Tfakultase']['id']; ?>
		</td>
		<td>
			<?php echo $tfakultase['Tfakultase']['kode']; ?>
		</td>
		<td>
			<?php echo $tfakultase['Tfakultase']['nama']; ?>
			<div class="sub"><i><?php echo $tfakultase['Tfakultase']['nama_en']; ?></i></div>
		</td>
		<td class="actions">
			<?php echo $html->link($html->image('pencil_16.png'), array('action'=>'edit', $tfakultase['Tfakultase']['id']), array('title'=>'edit'),false,false); ?>
			<?php echo $html->link($html->image('del_16.png'), array('action'=>'delete', $tfakultase['Tfakultase']['id']), array('title'=>'hapus'), sprintf(__('Are you sure you want to delete # %s?', true), $tfakultase['Tfakultase']['id']),false); ?>
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
<div class="pagination">
			<div class="paging">
				<?php echo $paginator->prev('&laquo; '.__('Sebelumnya', true), array('escape'=>false, 'class'=>'prev'), null, array('class'=>'disabled_prev'));?>
				<?php echo $paginator->numbers(array('separator'=>''));?>
				<?php echo $paginator->next(__('Selanjutnya', true).' &raquo;', array('escape'=>false, 'class'=>'next'), null, array('class'=>'disabled_next'));?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<div class="grid_4 omega" id="sidebar">
	<div class="sidebox special">
		<ul>
			<li><?php echo $html->link($html->image('add_16.png'). __('Tambah Fakultas', true), array('action'=>'add'), array('class'=>'tombol'), null, false); ?></li>
		</ul>
	</div>
</div>
