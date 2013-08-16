<div class="vehiculoTipos form">
<?php echo $this->Form->create('VehiculoTipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vehiculo Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_veht');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('VehiculoTipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('VehiculoTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehiculo Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehiculos'), array('controller' => 'vehiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehiculo'), array('controller' => 'vehiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
