<div class="teilis index">
	<h2><?php echo __('Teilis');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nachname');?></th>
			<th><?php echo $this->Paginator->sort('vorname');?></th>
			<th><?php echo $this->Paginator->sort('geboren');?></th>
			<th><?php echo $this->Paginator->sort('ist_kjgmitglied');?></th>
			<th><?php echo $this->Paginator->sort('kann_schwimmen');?></th>
			<th><?php echo $this->Paginator->sort('zeltwunsch');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('anmeldung');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($teilis as $teili): ?>
	<tr>
		<td><?php echo h($teili['Teili']['nachname']); ?>&nbsp;</td>
		<td><?php echo h($teili['Teili']['vorname']); ?>&nbsp;</td>
		<td><?php echo h($teili['Teili']['geboren']); ?>&nbsp;</td>
		<td><?php echo h($teili['Teili']['ist_kjgmitglied']); ?>&nbsp;</td>
		<td><?php echo h($teili['Teili']['kann_schwimmen']); ?>&nbsp;</td>
		<td><?php echo h($teili['Teili']['zeltwunsch']); ?>&nbsp;</td>
		<td><?php echo h($teili['Teili']['id']); ?>&nbsp;</td>
		<td><?php echo h($teili['Teili']['anmeldung']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $teili['Teili']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $teili['Teili']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $teili['Teili']['id']), null, __('Are you sure you want to delete # %s?', $teili['Teili']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Teili'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Wuensches'), array('controller' => 'wuensches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wuensche'), array('controller' => 'wuensches', 'action' => 'add')); ?> </li>
	</ul>
</div>
