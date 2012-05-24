<div class="betreuer form">
<?php echo $this->Form->create('Betreuer');?>
	<fieldset>
		<legend><?php echo __('Add Betreuer','de'); ?></legend>
	<?php
		echo $this->Form->input('nachname');
		echo $this->Form->input('vorname');
		echo $this->Form->input('geboren',array('label' => 'Geburtsdatum',
                'dateFormat' => 'DMY',
                'minYear' => date('Y') - 70,
                'maxYear' => date('Y') - 6,
            ));
		echo $this->Form->input('ist_kjgmitglied');
		echo $this->Form->input('kann_schwimmen');
		echo $this->Form->input('anmeldung');
		echo $this->Form->input('rolle_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Betreuer'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Rollen'), array('controller' => 'rollen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rolle'), array('controller' => 'rollen', 'action' => 'add')); ?> </li>
	</ul>
</div>
