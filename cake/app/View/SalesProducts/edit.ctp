<div class="salesProducts form">
<?php echo $this->Form->create('SalesProduct'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sales Product'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('sale_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SalesProduct.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SalesProduct.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sales Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
