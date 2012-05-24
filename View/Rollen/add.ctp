<div class="rollen form">
<?php echo $this->Form->create('Rolle');?>
	<fieldset>
		<legend><?php echo __('Add Rolle'); ?></legend>
	<?php
		echo $this->Form->input('bezeichnung');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rollen'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Betreuer'), array('controller' => 'betreuer', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Betreuer'), array('controller' => 'betreuer', 'action' => 'add')); ?> </li>
	</ul>
</div>
