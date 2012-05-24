<div class="teilis view">
<h2><?php  echo __('Teili');?></h2>
	<dl>
		<dt><?php echo __('Nachname'); ?></dt>
		<dd>
			<?php echo h($teili['Teili']['nachname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vorname'); ?></dt>
		<dd>
			<?php echo h($teili['Teili']['vorname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geboren'); ?></dt>
		<dd>
			<?php echo h($teili['Teili']['geboren']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ist Kjgmitglied'); ?></dt>
		<dd>
			<?php echo h($teili['Teili']['ist_kjgmitglied']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kann Schwimmen'); ?></dt>
		<dd>
			<?php echo h($teili['Teili']['kann_schwimmen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zeltwunsch'); ?></dt>
		<dd>
			<?php echo h($teili['Teili']['zeltwunsch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($teili['Teili']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anmeldung'); ?></dt>
		<dd>
			<?php echo h($teili['Teili']['anmeldung']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Teili bearbeiten'), array('action' => 'edit', $teili['Teili']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Teili löschen'), array('action' => 'delete', $teili['Teili']['id']), null, __('Are you sure you want to delete # %s?', $teili['Teili']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Teili anzeigen'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neuer Teili'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zeige Wuensche'), array('controller' => 'wuensche', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neuer Wunsch'), array('controller' => 'wuensche', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Wuensches');?></h3>
	<?php if (!empty($teili['Wuensche'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Teili Id'); ?></th>
		<th><?php echo __('Gewuenscht'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($teili['Wuensche'] as $wuensche): ?>
		<tr>
			<td><?php echo $wuensche['id'];?></td>
			<td><?php echo $wuensche['teili_id'];?></td>
			<td><?php echo $wuensche['gewuenscht'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wuensches', 'action' => 'view', $wuensche['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wuensches', 'action' => 'edit', $wuensche['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wuensches', 'action' => 'delete', $wuensche['id']), null, __('Are you sure you want to delete # %s?', $wuensche['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wuensche'), array('controller' => 'wuensches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
