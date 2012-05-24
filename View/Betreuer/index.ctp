<div class="betreuer index">
	<h2><?php echo __('Betreuer');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nachname');?></th>
			<th><?php echo $this->Paginator->sort('vorname');?></th>
			<th><?php echo $this->Paginator->sort('geboren');?></th>
			<th><?php echo $this->Paginator->sort('ist_kjgmitglied');?></th>
			<th><?php echo $this->Paginator->sort('kann_schwimmen');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('anmeldung');?></th>
			<th><?php echo $this->Paginator->sort('rolle_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($betreuer as $betreuer): ?>
	<tr>
		<td><?php echo h($betreuer['Betreuer']['nachname']); ?>&nbsp;</td>
		<td><?php echo h($betreuer['Betreuer']['vorname']); ?>&nbsp;</td>
		<td><?php echo h($betreuer['Betreuer']['geboren']); ?>&nbsp;</td>
		<td><?php echo h($betreuer['Betreuer']['ist_kjgmitglied']); ?>&nbsp;</td>
		<td><?php echo h($betreuer['Betreuer']['kann_schwimmen']); ?>&nbsp;</td>
		<td><?php echo h($betreuer['Betreuer']['id']); ?>&nbsp;</td>
		<td><?php echo h($betreuer['Betreuer']['anmeldung']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($betreuer['Rolle']['bezeichnung'], array('controller' => 'rollen', 'action' => 'view', $betreuer['Rolle']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Anzeigen'), array('action' => 'view', $betreuer['Betreuer']['id'])); ?>
			<?php echo $this->Html->link(__('Bearbeiten'), array('action' => 'edit', $betreuer['Betreuer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Löschen'), array('action' => 'delete', $betreuer['Betreuer']['id']), null, __('Willst Du Betreuer \'%s\' wirklich löschen?', $betreuer['Betreuer']['vorname'])); ?>
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
		<li><?php echo $this->Html->link(__('New Betreuer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rollen'), array('controller' => 'rollen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rolle'), array('controller' => 'rollen', 'action' => 'add')); ?> </li>
	</ul>
</div>
