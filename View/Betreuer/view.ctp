<div class="betreuer view">
<h2><?php  echo __('Betreuer');?></h2>
	<dl>
		<dt><?php echo __('Nachname'); ?></dt>
		<dd>
			<?php echo h($betreuer['Betreuer']['nachname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vorname'); ?></dt>
		<dd>
			<?php echo h($betreuer['Betreuer']['vorname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geboren'); ?></dt>
		<dd>
			<?php echo h($betreuer['Betreuer']['geboren']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ist Kjgmitglied'); ?></dt>
		<dd>
			<?php echo h($betreuer['Betreuer']['ist_kjgmitglied']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kann Schwimmen'); ?></dt>
		<dd>
			<?php echo h($betreuer['Betreuer']['kann_schwimmen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($betreuer['Betreuer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anmeldung'); ?></dt>
		<dd>
			<?php echo h($betreuer['Betreuer']['anmeldung']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rolle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($betreuer['Rolle']['bezeichnung'], array('controller' => 'rollen', 'action' => 'view', $betreuer['Rolle']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Betreuer bearbeiten'), array('action' => 'edit', $betreuer['Betreuer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Betreuer löschen'), array('action' => 'delete', $betreuer['Betreuer']['id']), null, __('Are you sure you want to delete # %s?', $betreuer['Betreuer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Betreuer'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Betreuer anlegen'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Rollen auflisten'), array('controller' => 'rollen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rolle anlegen'), array('controller' => 'rollen', 'action' => 'add')); ?> </li>
	</ul>
</div>
