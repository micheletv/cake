<div class="salesProducts view">
<h2><?php echo __('Sales Product'); ?></h2>
	<dl>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesProduct['Product']['description'], array('controller' => 'products', 'action' => 'view', $salesProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesProduct['Sale']['id'], array('controller' => 'sales', 'action' => 'view', $salesProduct['Sale']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sales Product'), array('action' => 'edit', $salesProduct['SalesProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sales Product'), array('action' => 'delete', $salesProduct['SalesProduct']['id']), array(), __('Are you sure you want to delete # %s?', $salesProduct['SalesProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
