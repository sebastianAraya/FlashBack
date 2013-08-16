<div class="medidasPropiedades form">
<?php echo $this->Form->create('MedidasPropiedade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Medidas Propiedade'); ?></legend>
	<?php
		echo $this->Form->input('medida_id');
		echo $this->Form->input('propiedade_id');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MedidasPropiedade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MedidasPropiedade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Medidas Propiedades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('controller' => 'medidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('controller' => 'medidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
