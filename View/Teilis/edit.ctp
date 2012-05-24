<div class="teilis form">
<?php echo $this->Form->create('Teili');?>
	<fieldset>
		<legend><?php echo __('Edit Teili'); ?></legend>
	<?php
		echo $this->Form->input('nachname');
		echo $this->Form->input('vorname');
		echo $this->Form->input('geboren');
		echo $this->Form->input('ist_kjgmitglied');
		echo $this->Form->input('kann_schwimmen');
		echo $this->Form->input('zeltwunsch');
		echo $this->Form->input('id');
		echo $this->Form->input('anmeldung');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Teili.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Teili.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Teilis'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Wuensches'), array('controller' => 'wuensches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wuensche'), array('controller' => 'wuensches', 'action' => 'add')); ?> </li>
	</ul>
</div>
