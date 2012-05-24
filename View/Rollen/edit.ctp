<div class="rollen form">
<?php echo $this->Form->create('Rolle');?>
	<fieldset>
		<legend><?php echo __('Edit Rolle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('bezeichnung');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rolle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rolle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rollen'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Betreuer'), array('controller' => 'betreuer', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Betreuer'), array('controller' => 'betreuer', 'action' => 'add')); ?> </li>
	</ul>
</div>
