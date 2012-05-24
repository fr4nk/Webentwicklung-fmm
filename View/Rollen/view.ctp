<div class="rollen view">
<h2><?php  echo __('Rolle');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rolle['Rolle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bezeichnung'); ?></dt>
		<dd>
			<?php echo h($rolle['Rolle']['bezeichnung']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rolle'), array('action' => 'edit', $rolle['Rolle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rolle'), array('action' => 'delete', $rolle['Rolle']['id']), null, __('Are you sure you want to delete # %s?', $rolle['Rolle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rollen'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rolle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Betreuer'), array('controller' => 'betreuer', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Betreuer'), array('controller' => 'betreuer', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Betreuer');?></h3>
	<?php if (!empty($rolle['Betreuer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nachname'); ?></th>
		<th><?php echo __('Vorname'); ?></th>
		<th><?php echo __('Geboren'); ?></th>
		<th><?php echo __('Ist Kjgmitglied'); ?></th>
		<th><?php echo __('Kann Schwimmen'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Anmeldung'); ?></th>
		<th><?php echo __('Rolle Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rolle['Betreuer'] as $betreuer): ?>
		<tr>
			<td><?php echo $betreuer['nachname'];?></td>
			<td><?php echo $betreuer['vorname'];?></td>
			<td><?php echo $betreuer['geboren'];?></td>
			<td><?php echo $betreuer['ist_kjgmitglied'];?></td>
			<td><?php echo $betreuer['kann_schwimmen'];?></td>
			<td><?php echo $betreuer['id'];?></td>
			<td><?php echo $betreuer['anmeldung'];?></td>
			<td><?php echo $betreuer['rolle_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'betreuer', 'action' => 'view', $betreuer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'betreuer', 'action' => 'edit', $betreuer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'betreuer', 'action' => 'delete', $betreuer['id']), null, __('Are you sure you want to delete # %s?', $betreuer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Betreuer'), array('controller' => 'betreuer', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
